<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kayayusufalparslan\project\models\CompanyOutgoing */

$this->title = 'Create Company Outgoing';
$this->params['breadcrumbs'][] = ['label' => 'Company Outgoings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-outgoing-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
