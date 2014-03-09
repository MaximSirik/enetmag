<?php if ($_SESSION['level'] != 1) {
    header("Location: /");
    exit;
} ?>
<div class="container"
<div class="modal-header">
    <h4 class="modal-title" id="myModalLabel">Панель администратора</h4>
</div>
</div>
<br>
<div class="container">
    <div id="tabs">
        <ul class="nav nav-pills">
            <li class="active"><a href="#tabs-1">Заказы</a></li>
            <li class="active"><a href="#tabs-2">Добавление товаров</a></li>
            <li class="active"><a href="#tabs-3">Добавление категорий</a></li>
            <li class="active"><a href="#tabs-4">Добавление под-категорий</a></li>
            <li class="active"><a href="#tabs-5">Пользователи</a></li>
        </ul>
        <div style="margin-top: 20px;">
            <div id="tabs-1">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Название заказа</th>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Email</th>
                        <th>Телефон</th>
                        <th>Дата заказа</th>
                    </tr>
                    </thead>
                    <tbody>

                    <? foreach ($this->orders as $key => $value1) { ?>
                        <tr>
                            <td><?= $value1['id_orders'] ?></td>
                            <td><a href="?adminview/<?= $value1['link'] ?>" target="_blank">Заказ № <?= $value1['id_orders'] ?></a></td>
                            <td><?= $value1['first_name'] ?></td>
                            <td><?= $value1['last_name'] ?></td>
                            <td><?= $value1['email'] ?></td>
                            <td><?= $value1['telephone'] ?></td>
                            <td><?= date('Y-m-d', $value1['time']) ?></td>
                        </tr>
                    <? } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="tabs-2">
            <form class="form-horizontal" role="form" action="?admin" METHOD="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Название товара</label>

                    <div class="col-sm-10">
                        <input type="text" name="add_name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Категория товара</label>

                    <div class="col-sm-10">
                        <select class="form-control" name="add_select">
                            <? foreach ($this->view_category as $key => $value) { ?>
                                <option value=<?= $value['id'] ?>><?= $value['name'] ?></option>
                            <? } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Характеристики товара</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="add_specification">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Постер</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="add_poster">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Цена</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="add_cost">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Добавить</button>
                    </div>
                </div>
            </form>
        </div>
        <div id="tabs-3">
            <div class="container">
                <form method="post" action="?admin">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Введите имя катагории</label>
                        <input type="text" name="cat_edit" class="form-control" id="exampleInputEmail1" required>
                    </div>
                    <button type="submit" class="btn btn-default">Добавить</button>
                </form>
            </div>
        </div>
        <div id="tabs-4">
            <div class="container">
                <form method="post" action="?admin">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Введите имя под-катагории</label>
                        <input type="text" name="subcategory_edit" class="form-control" id="exampleInputEmail1"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Выберите родительскую категорию</label>
                        <select class="form-control" name="subcategory_select">
                            <? foreach ($this->view_category as $key => $value) { ?>
                                <option value=<?= $value['id'] ?>><?= $value['name'] ?></option>
                            <? } ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Добавить</button>
                </form>
            </div>
        </div>
        <div id="tabs-5">
            <div class="container">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Email</th>
                        <th>Пароль</th>
                        <th>Уровень доступа</th>
                        <th>Телефон</th>
                        <th>Дата регистрации</th>
                    </tr>
                    </thead>
                    <tbody>

                    <? foreach ($this->view_users as $key => $value1) { ?>
                        <tr>
                            <td><?= $value1['id'] ?></td>
                            <td><?= $value1['first_name'] ?></td>
                            <td><?= $value1['last_name'] ?></td>
                            <td><?= $value1['email'] ?></td>
                            <td><?= $value1['password'] ?></td>
                            <td><?= $value1['level'] ?></td>
                            <td><?= $value1['telephone'] ?></td>
                            <td><?= date('Y-m-d', $value1['date']) ?></td>
                        </tr>
                    <? } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>