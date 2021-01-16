<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kayayusufalparslan\project\models\CompanyOutgoing */

$myMemberModel = \kayayusufalparslan\project\models\Companies::find()->
where(['companyID' => $model->incomeID])->one();
$this->title = $myMemberModel->companyName;
$this->params['breadcrumbs'][] = ['label' => 'Company Outgoings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $myMemberModel->companyName, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="company-outgoing-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
