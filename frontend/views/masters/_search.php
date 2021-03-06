<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MastersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="masters-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'masters_id') ?>

    <?= $form->field($model, 'masters_first_name') ?>

    <?= $form->field($model, 'masters_last_name') ?>

    <?= $form->field($model, 'masters_email') ?>

    <?= $form->field($model, 'masters_photo') ?>

    <?php // echo $form->field($model, 'masters_rate') ?>

    <?php // echo $form->field($model, 'masters_created_date') ?>

    <?php // echo $form->field($model, 'masters_status') ?>

    <?php // echo $form->field($model, 'masters_services_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
