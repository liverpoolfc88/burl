<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Url */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="url-form">

    <?php $form = ActiveForm::begin(['action' => ['site/addlink'],'options' => ['method' => 'post']]); ?>

    <?= $form->field($model, 'org_url')->textInput(['maxlength' => true])->label('E-manzilni kiriting') ?>

    <?php $model->limit = 'Вечно'; ?>
    <?= $form->field($model, 'limit')->radioList(['Вечно'=>'Doimiy', 'Один месяц' => 'Bir oy', 'Одна неделя' =>'Bir hafta'])
        ->label('Срок действия короткой ссылки:'); ?>


    <?= $form->field($model, 'gen')->hiddenInput()->label(false)?>

    <?= $form->field($model, 'click')->hiddenInput(['value'=>0])->label(false)?>

    <?= $form->field($model, 'short_link')->hiddenInput(['maxlength' => true,'value'=>1])->label(false) ?>

    <?= $form->field($model, 'analitic')->hiddenInput(['maxlength' => true,'value'=>1]) ->label(false)?>

    <div class="form-group">
        <?= Html::submitButton('Qisqartirilgan ssilka olish', ['class' => ' btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
<style>
    .knopka{
        padding: 20px;
    }
</style>