<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kayayusufalparslan\project\models\Companies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="companies-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'companyName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'companyLocation')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'companyEmail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'companyPhone')->textInput() ?>

    <?= $form->field($model, 'employees')->textInput() ?>

    <?= $form->field($model, 'payment')->checkbox() ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
