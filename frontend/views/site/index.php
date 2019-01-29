<?php

/* @var $this yii\web\View */
/* @var $model \frontend\models\SoapForm */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = 'Работа с SOAP';
?>
<div class="site-index">

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'soap-form']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password') ?>

            <?= $form->field($model, 'city') ?>

            <?= $form->field($model, 'name') ?>

            <?= $form->field($model, 'date')->widget(\yii\jui\DatePicker::class, [
                'language' => 'ru',
                'dateFormat' => 'yyyy-MM-dd',
                'options' => ['class' => 'form-control' ]
            ]) ?>

            <?= $form->field($model, 'field1') ?>

            <?= $form->field($model, 'field2') ?>

            <?= $form->field($model, 'field3') ?>


            <div class="form-group">
                <?= Html::button('Рассчитать', ['class' => 'btn btn-primary', 'id' => 'send-btn', 'onclick' => 'send_soap()']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <div id="result">

    </div>
</div>

<script type="text/javascript">
    function send_soap() {
        $.ajax({
            type: 'post',
            url: '<?php echo \yii\helpers\Url::to(['site/soap']); ?>',
            data: $('#soap-form').serialize()
        }).done(function (data) {
            $('#result').empty().append(data);
        }).fail(function () {
            console.log('fail');
        });
    }
</script>
