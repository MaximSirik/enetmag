<div class="modal-header">
    <h4 class="modal-title" id="myModalLabel">Форма регистрации</h4>
</div>
<div style="width: 80%;">
    <form class="form-horizontal" role="form" id="login" METHOD="POST" action="?login">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>

            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" name="pass"
                       placeholder="Пароль">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Авторизация</button>
            </div>
        </div>
    </form>
    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Нет учетной записи? <a href="?registration">
                Зарегистрироваться</a></h4>
    </div>
    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Войти как пользователь, через</h4>
        <h4><a href=""> Facebook</a>
            <a href=""> Vkontakte</a></h4>
    </div>
</div>