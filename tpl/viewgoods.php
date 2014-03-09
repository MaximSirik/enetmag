<div class="container" id="post">
     <div class="row">
         <div class="col-md-8">
                 <div class="row">
                     <? foreach ($this->view_goods as $key => $value) { ?>
                         <div class="col-xs-6">
                             <a><img src="<?= $value['poster'] ?>" title="<?= $value['name'] ?>"width="100%" height="100%"/></a>
                             <dl class="dl-horizontal">
                                 <dt>
                                     <button type="button" id="cost" class="btn btn-info"><?= $value['cost'] ?>&nbsp;грн</button>
                                 </dt>
                                 <dd>
                                     <a href="?addbasket/<?= $value['id'] ?>">
                                         <button type="button" id="buy" class="btn btn-success">Купить</button>
                                     </a>
                                 </dd>
                             </dl>
                         </div>
                         <div class="col-xs-6">
                             <a><h3><?= $value['name'] ?></h3></a>
                             <p><?= $value['specification'] ?></p>
                         </div>
                     <? } ?>

                 </div>
                 <?php
                 session_start();
                 if (!empty($_SESSION['user_id'])) {?>
                     <h3>Добавить отзыв</h3>
                     <form role="search" method="post">
                         <div class="form-group">
                             <p><textarea id="input-message" name="text_review" placeholder="Введите текст комментария" class="form-control" rows="5" required></textarea></p>
                         </div>
                         <p><button type="submit" class="btn btn-default">Добавить отзыв</button></p>
                     </form>
                 <?} else {?>
                     <h3>Оставлять отзывы могут только зарегистрированные пользователи</h3>
                 <?}?>
         </div>
         <div class="col-md-4">
                 <h4>Отзывы покупателей</h4>
                 <? foreach ($this->review as $key => $value) { ?>
                     <p class="bg-info" style="border-radius: 3px; padding: 5px;">
                         <?= $value['first_name'] ?>
                         <br>
                         <?= $value['review'] ?>
                     </p>
                 <? } ?>
         </div>
     </div>
</div>