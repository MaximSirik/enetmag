<div class="modal-header">
</div>
<div class="container" id="post">
    <div class="row">
        <? foreach ($this->view_cat as $key => $value) { ?>
            <div class="col-md-4">
                <a href="?viewgoods/<?= $value['id'] ?>">
                    <img src="<?= $value['poster'] ?>" title="<?= $value['name'] ?>" class="img-thumbnail"/></a>
                <a href="?viewgoods/<?= $value['id'] ?>"><h3><?= $value['name'] ?></h3></a>
                <p><?= $value['specification'] ?></p>
                <dl class="dl-horizontal">
                    <dt>
                        <button type="button" id="cost" class="btn btn-info"><?= $value['cost'] ?>&nbsp;грн</button>
                    </dt>
                    <dd>
                        <a href="?addbasket/<?= $value['id'] ?>">
                            <button type="button" id="buy" class="btn btn-success" data-toggle="modal" data-target="#myModal">Купить</button>
                        </a>
                    </dd>
                </dl>
            </div>
        <? } ?>
    </div>
</div>