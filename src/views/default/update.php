<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kayayusufalparslan\project\models\Companies */

$this->title = 'Update Companies: ' . $model->companyID;
$this->params['breadcrumbs'][] = ['label' => 'Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->companyID, 'url' => ['view', 'id' => $model->companyID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="companies-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
