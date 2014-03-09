<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MVC Shop</title>
    <link href="tpl/css/bootstrap.min.css" rel="stylesheet">
    <link href="tpl/css/style.css" rel="stylesheet">

    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#tabs").tabs();
        });
    </script>
</head>
<body>
<nav class="navbar navbar-inverse" role="navigation" id="top-menu">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Shop</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Главная</a></li>
                <li><a href="?help">Помощь</a></li>
                <li><a href="?delivery">Доставка</a></li>
                <li><a href="?guarantees">Гарантия</a></li>
                <li><a href="?contacts">Контакты</a></li>
                <?php
                session_start();
                if ($_SESSION['level'] == 1) {?>
                    <li><a style="margin: 0; padding: 0;" href="?admin"><button type="button" class="btn btn-danger" style="margin-top: 7px;">Админ панель</button></a></li>
                <?}?>
            </ul>
            <form class="navbar-form navbar-left" role="search" method="post" action="?search">
                <div class="form-group">
                    <input type="text" name="search_name" class="form-control" placeholder="Введите название товара">
                </div>
                <button type="submit" class="btn btn-default">Поиск</button>
            </form>
            <?if (empty($_SESSION['level'])) {?>
                <a href="?login">
                    <button class="btn btn-primary" data-toggle="modal" id="auth" data-target=".bs-example-modal-lg">Вход в
                        интернет магазин
                    </button>
                </a>
            <?}?>
            <? if (!empty($_SESSION['level'])) {?>
                <a href="?logout">
                    <button class="btn btn-primary" data-toggle="modal" id="auth" data-target=".bs-example-modal-lg">Выход
                    </button>
                </a>
            <? } ?>
            <? if (empty($_SESSION['basket'])) {?>
                    <button class="btn btn-primary" data-toggle="modal" id="auth" data-target=".bs-example-modal-lg">Корзина пуста</button>
            <? } ?>
            <? if (!empty($_SESSION['basket'])){?>
                <a href="?basket">
                    <button class="btn btn-danger" data-toggle="modal" id="auth" data-target=".bs-example-modal-lg">Ваши заказы</button>
                </a>
            <? } ?>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div>
    <? $this->out($this->tpl, true); ?>
    <hr>
    <footer>
        <p>&copy; Company 2014</p>
    </footer>
</div>
<!-- /container -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="tpl/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</body>
</html>
