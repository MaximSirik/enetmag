<div class="modal-header">
    <h4 class="modal-title" id="myModalLabel">Форма регистрации</h4>
</div>
<div style="width: 80%;">
    <form class="form-horizontal" role="form" id="login" method="post">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required >
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>

            <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Пароль" required >
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword4" class="col-sm-2 control-label">Имя</label>

            <div class="col-sm-10">
                <input type="text" name="first_name" class="form-control" id="inputPassword3" placeholder="Имя" required >
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword5" class="col-sm-2 control-label">Фамилия</label>

            <div class="col-sm-10">
                <input type="text" name="second_name" class="form-control" id="inputPassword3" placeholder="Фамилия" required >
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword6" class="col-sm-2 control-label">Номер телефона</label>

            <div class="col-sm-10">
                <input type="text" name="phone" class="form-control" id="inputPassword3" placeholder="Номер телефона" required >
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Зарегистрироваться</button>
            </div>
        </div>
    </form>
    <span class="label label-danger"><?= @$this->eror ?></span>
</div>