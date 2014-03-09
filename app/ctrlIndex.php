<?php

class ctrlIndex extends ctrl
{
    function index()
    {

        $this->posts = $this->db->query("SELECT * FROM category WHERE parent_id=0")->all();
        $this->out('posts.php');
    }

    function registration()
    {
        session_start();
        if (!empty($_POST)) {
            $email = $_POST['email'];
            $email = trim($email);
            $email = stripslashes($email);
            $email = htmlspecialchars($email);
            $password = md5($_POST['password']);
            $firstName = $_POST['first_name'];
            $firstName = trim($firstName);
            $firstName = stripslashes($firstName);
            $firstName = htmlspecialchars($firstName);
            $secondName = $_POST['second_name'];
            $secondName = trim($secondName);
            $secondName = stripslashes($secondName);
            $secondName = htmlspecialchars($secondName);
            $phone = $_POST['phone'];
            $phone = trim($phone);
            $phone = stripslashes($phone);
            $phone = htmlspecialchars($phone);
            $date_registration = time();
            $searchEmail = $this->db->query("SELECT * FROM users WHERE email='$email' OR telephone='$phone'")->all();
            if ($searchEmail == NULL) {
                $this->db->query("INSERT INTO users(first_name,last_name,email,password,level,telephone,date) VALUES ('$firstName','$secondName','$email','$password','0','$phone','$date_registration')");
                header("Location: /");
            } else {
                $this->eror = 'Пользователь с таким email или номером телефона уже зарегистрирован';
            }

        }

        $this->out('registration.php');
    }

    function login()
    {
        session_start();
        if (!empty($_POST)) {
            $email = $_POST['email'];
            $password = md5($_POST['pass']);
            $user = $this->db->query("SELECT * FROM users WHERE email = '$email' AND password ='$password'")->all();
            if (!empty($user)) {
                $key = md5(microtime() . rand(0, 10000));
                $user_id = $user[0]['id'];
                setcookie('uid', $user_id, time() + 86400 * 30, '/');
                setcookie('key', md5($key), time() + 86400 * 30, '/');
                $_SESSION['level'] = $user[0]['level'];
                $_SESSION['user_id'] = $user[0]['id'];
                $this->db->query("UPDATE users SET cookie = '$key' WHERE id = '$user_id'");
                header("Location: /");
            } else {
                $this->eror = 'Неправильный емейл или пароль';
            }
        }
        $this->out('login.php');
    }

    function view($id)
    {
        $this->view_cat = $this->db->query("SELECT tb1.id AS id_cat, tb1.name AS name_cat, tb1.parent_id, tb2.id, tb2.name, tb2.category, tb2.cost, tb2.specification, tb2.time, tb2.poster FROM goods as tb2, category as tb1 WHERE tb2.category='$id' AND tb1.id='$id'")->all();
        $this->out('view.php');
    }

    function admin()
    {
        $this->view_users = $this->db->query("SELECT * FROM users")->all();
        $this->view_category = $this->db->query("SELECT * FROM category ORDER BY parent_id")->all();
        if (!empty($_POST['cat_edit'])) {
            $cat_edit = $_POST['cat_edit'];
            $cat_edit = trim($cat_edit);
            $cat_edit = stripslashes($cat_edit);
            $cat_edit = htmlspecialchars($cat_edit);
            $this->db->query("INSERT INTO category(name, parent_id) VALUES ('$cat_edit',0)");
        }
        if (!empty($_POST['subcategory_select'])) {
            $subcategory_select = $_POST['subcategory_select'];
            $subcategory_edit = $_POST['subcategory_edit'];
            $subcategory_edit = trim($subcategory_edit);
            $subcategory_edit = stripslashes($subcategory_edit);
            $subcategory_edit = htmlspecialchars($subcategory_edit);
            $this->db->query("INSERT INTO category(name, parent_id) VALUES ('$subcategory_edit','$subcategory_select')");
        }
        if (isset($_POST['add_name']) && isset($_POST['add_select']) && isset($_POST['add_specification']) && isset($_POST['add_poster'])) {
            $add_name = $_POST['add_name'];
            $add_select = $_POST['add_select'];
            $add_specification = $_POST['add_specification'];
            $add_poster = $_POST['add_poster'];
            $cost = $_POST['add_cost'];
            $time = time();
            $this->db->query("INSERT INTO goods(name, category, cost, specification, time, poster) VALUES ('$add_name','$add_select','$cost','$add_specification','$time','$add_poster')");
        }
        $this->orders = $this->db->query("SELECT * FROM orders,users WHERE orders.id_users=users.id")->all();
        $this->out('admin.php');
    }

    function search()
    {
        $search = $_POST['search_name'];
        $search = trim($search);
        $search = stripslashes($search);
        $search = htmlspecialchars($search);
        $this->view_search = $this->db->query("SELECT * FROM goods WHERE name LIKE '%$search%'")->all();
        $this->out('search.php');
    }

    function logout()
    {
        session_start();
        session_unset();
        header("Location: {$_SERVER ['HTTP_REFERER']}");
    }

    function addbasket($id)
    {
        session_start();
        $_SESSION['basket'][] = $id;
        header("Location: {$_SERVER ['HTTP_REFERER']}");
    }

    function basket()
    {
        session_start();
        $temp = $_SESSION['basket'];
        if (!empty($_SESSION['basket'])) {
            for ($i = 0; $i < count($temp); $i++) {
                $tempdb = $temp[$i];
                $dbmas[] = $this->db->query("SELECT * FROM goods WHERE id = '$tempdb'")->all();
            }
            $this->basket = $dbmas;
        }

        if (empty($_SESSION['basket'])) {
        header("Location: /");
        }
        if (!empty($_POST['count'])) {
            $count = $_POST['count'];
            $id_user = $_SESSION['user_id'];
            $time = time();
            $microtime = microtime();
            $microtime = str_replace(" ","",$microtime);
            $this->db->query("INSERT INTO orders (id_users, time, link) VALUE ('$id_user','$time','$microtime')");
            for ($i = 0; $i < count($temp); $i++) {
                $temp_id = $dbmas[$i][0]['id'];
                $temp_cost = $dbmas[$i][0]['cost'];
                $temp_count = $count[$i];
                $this->db->query("INSERT INTO orders_items(id_goods, id_order, cost_order, count) VALUES ('$temp_id','$microtime','$temp_cost', '$temp_count')");
            }
            session_unset();
            header("Location: /");
        }
        $this->out('basket.php');
    }

    function viewgoods($id)
    {
        session_start();
        $this->view_goods = $this->db->query("SELECT * FROM goods WHERE id='$id'")->all();
        $this->review = $this->db->query("SELECT first_name, review FROM reviews,users WHERE reviews.id_goods='$id' AND reviews.id_user=users.id")->all();
        if (!empty($_POST['text_review']))
        {
            $text = $_POST['text_review'];
            $text = trim($text);
            $text = stripslashes($text);
            $text = htmlspecialchars($text);
            $id_user = $_SESSION['user_id'];
            $this->db->query("INSERT INTO reviews(id_goods, id_user, review) VALUES ('$id','$id_user', '$text')");
            header("Location: {$_SERVER ['HTTP_REFERER']}");
        }
        $this->out('viewgoods.php');
    }

    function adminview($id)
    {
        $this->adminview = $this->db->query("SELECT * FROM orders_items, goods WHERE orders_items.id_order='$id' AND orders_items.id_goods=goods.id")->all();
        $this->out('adminview.php');
    }

    function help()
    {
        $this->out('help.php');
    }

    function delivery()
    {
        $this->out('delivery.php');
    }

    function guarantees() {
        $this->out('guarantees.php');
    }

    function contacts() {
        $this->out('contacts.php');
    }
}