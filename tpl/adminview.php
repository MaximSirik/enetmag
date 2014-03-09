<?php if ($_SESSION['level'] != 1) {
    header("Location: /");
    exit;
} ?>
<div class="container"
    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Информация о заказе</h4>
    </div>
</div>
<br>
<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Название товара</th>
            <th>Количество</th>
            <th>Цена за ед</th>
            <th>Цена</th>
        </tr>
        </thead>
        <tbody>
        <? $sum = 0; foreach ($this->adminview as $key => $value1) { ?>
            <tr>
                <td>*</td>
                <td><a href="?viewgoods/<?= $value1['id_goods'] ?>" target="_blank"><?= $value1['name'] ?></a></td>
                <td><?= $value1['count'] ?></td>
                <td><?= $value1['cost_order'] ?></td>
                <td><?= $sumall = $value1['cost_order']*$value1['count'] ?></td>
            </tr>
        <? $sum += $sumall; } ?>
        </tbody>
        <tbody>
        <tr>
            <h5>Итого сумма заказа равна <?= $sum; ?> грн!</h5>
        </tr>
        </tbody>
    </table>
</div>