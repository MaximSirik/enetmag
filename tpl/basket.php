<div class="modal-header">
    <h2>Оформление заказа</h2>
    <?php if (empty($_SESSION['user_id'])) { ?>
        <p><h4>Если вы впервые делаете покупку на нашем сайте заполните необходимые поля или <a href="?registration">зарегистрируйтесь</a>.
            Если вы уже выполняли покупку Вам необходимо <a href="?login">авторизироваться</a> </h4></p>

    <? exit;} ?>
</div>
<div class="container" id="post">
    <div class="row">
        <form action="?basket" method="post">
            <? foreach ($this->basket as $value) {
                for ($i = 0; $i < count($value); $i++) {
                    ?>
                    <div class="col-md-12">
                        <dl class="dl-horizontal">
                            <dt>
                                <a href="?viewgoods/<?= $value[$i]['id'] ?>">
                                    <img src="<?= $value[$i]['poster'] ?>" title="<?= $value[$i]['name'] ?>"
                                         width="150px" height="75px"/>
                                </a>
                            </dt>
                            <dd>
                                <a href="?viewgoods/<?= $value[$i]['id'] ?>">
                                    <h3>
                                        <?= $value[$i]['name'] ?>
                                    </h3>
                                </a>
                            </dd>
                        </dl>
                        <p>
                            <?= $value[$i]['specification'] ?>
                        </p>

                        <div class="col-md-4">
                            <div class="col-md-6">
                                <?= $value[$i]['cost'] ?>&nbsp;грн
                            </div>
                            <div class="col-md-6">
                                <input type="number" step="1" min="1" name="count[]" placeholder="Количество единиц" required/>
                            </div>
                        </div>
                    </div>
                <?
                }
            } ?>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10" style="margin-top: 20px;">
                    <button type="submit" class="btn btn-primary">Оформить заказ</button>
                </div>
            </div>
        </form>
    </div>
</div>