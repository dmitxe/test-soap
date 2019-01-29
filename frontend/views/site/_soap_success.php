<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

?>
<div class="site-success">

    <div class="panel panel-success">
        <div class="panel-heading"><?= Html::encode($name) ?></div>
        <div class="panel-body">
            <div class="alert alert-success">
                <?= 'Price : ' ?>
                <?= nl2br(Html::encode($data['price'])) ?>
            </div>
            <div class="alert alert-success">
                <?= 'Info : ' ?>
                <?= nl2br(Html::encode($data['info'])) ?>
            </div>
        </div>
    </div>

</div>
