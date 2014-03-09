<div class="container" id="post">
    <div class="row">
        <? foreach ($this->view_search as $key => $value) { ?>
            <div class="col-md-4">
                <img src="<?= $value['poster'] ?>" title="<?= $value['name'] ?>" width="100%" height="100%"/>

                <a><h3><?= $value['name'] ?></h3></a>

                <p><?= $value['specification'] ?></p>
                <dl class="dl-horizontal">
                    <dt>
                        <button type="button" id="cost" class="btn btn-info"><?= $value['cost'] ?>&nbsp;грн</button>
                    </dt>
                    <dd>
                        <button type="button" id="buy" class="btn btn-success">Купить</button>
                    </dd>
                </dl>
            </div>
        <? } ?>
    </div>
</div>