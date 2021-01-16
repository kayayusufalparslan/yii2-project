<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kayayusufalparslan\project\models\CompanyOutgoingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-outgoing-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'incomeID') ?>

    <?= $form->field($model, 'month') ?>

    <?= $form->field($model, 'rent') ?>

    <?= $form->field($model, 'bills') ?>

    <?php // echo $form->field($model, 'salaries') ?>

    <?php // echo $form->field($model, 'cleaning') ?>

    <?php // echo $form->field($model, 'repairs') ?>

    <?php // echo $form->field($model, 'taxes') ?>

    <?php // echo $form->field($model, 'other') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
