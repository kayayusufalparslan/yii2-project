<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kayayusufalparslan\project\models\CompanyOutgoingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Company Outgoings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-outgoing-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Company Outgoing', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Create Company', ['default/index'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'incomeID',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
