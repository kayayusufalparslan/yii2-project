<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model kayayusufalparslan\project\models\CompanyOutgoing */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Company Outgoings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
$myMemberModel = \kayayusufalparslan\project\models\Companies::find()->
where(['companyID' => $model->incomeID])->one();
$this->title = $myMemberModel->companyName;
?>
<div class="company-outgoing-view">

    <h1> <?= Html::encode("Company Name: " . $myMemberModel->companyName) ?></h1>
    <h1> <?= Html::encode("Month: " . $model->month) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'Company Name ',
                'value' => function ($model) {
                    $myMemberModel = \kayayusufalparslan\project\models\Companies::find()->
                    where(['companyID' => $model->incomeID])->one();
                    return $myMemberModel->companyName;
                }
            ],
            'month',
            'rent',
            'bills',
            'salaries',
            'cleaning',
            'repairs',
            'taxes',
            'other',
        ],
    ]) ?>

</div>
