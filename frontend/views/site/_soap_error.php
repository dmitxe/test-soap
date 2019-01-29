<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

?>
<div class="soap-success">

    <div class="panel panel-danger">
        <div class="panel-heading"><?= Html::encode($name) ?></div>
        <div class="panel-body">
            <div class="alert alert-danger">
                <?= is_array($message)? '<pre>'. print_r($message).'</pre>' : nl2br(Html::encode($message)) ?>
            </div>
        </div>
    </div>

</div>
