<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kayayusufalparslan\project\models\CompaniesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="companies-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'companyID') ?>

    <?= $form->field($model, 'companyName') ?>

    <?= $form->field($model, 'companyLocation') ?>

    <?= $form->field($model, 'companyEmail') ?>

    <?= $form->field($model, 'companyPhone') ?>

    <?php // echo $form->field($model, 'employees') ?>

    <?php  echo $form->field($model, 'payment') ?>

    <?php // echo $form->field($model, 'note') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
