<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kayayusufalparslan\project\models\CompanyOutgoing */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-outgoing-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'incomeID')->dropDownList(
        \yii\helpers\ArrayHelper::map(\kayayusufalparslan\project\models\Companies::find()->all(), 'companyID','companyName'),
        ['prompt'=>'Select Company']
    ) ?>

    <?= $form->field($model, 'month')->dropDownList(
        ['1'=>'January', "2" => "February", "3" => "March", "4" => "April",
            "5" => "May", "6" => "June", "7" => "July", "8" => "August",
            "9" => "September", "10" => "October", "11" => "November", "12" => "December"],
        ['prompt'=>'Select Month']
    ) ?>

    <?= $form->field($model, 'rent')->textInput() ?>

    <?= $form->field($model, 'bills')->textInput() ?>

    <?= $form->field($model, 'salaries')->textInput() ?>

    <?= $form->field($model, 'cleaning')->textInput() ?>

    <?= $form->field($model, 'repairs')->textInput() ?>

    <?= $form->field($model, 'taxes')->textInput() ?>

    <?= $form->field($model, 'other')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
