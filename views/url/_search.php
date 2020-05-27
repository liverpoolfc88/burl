<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UrlSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="url-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'org_url') ?>

    <?= $form->field($model, 'gen') ?>

    <?= $form->field($model, 'click') ?>

    <?= $form->field($model, 'short_link') ?>

    <?php // echo $form->field($model, 'analitic') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
