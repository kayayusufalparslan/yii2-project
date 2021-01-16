<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kayayusufalparslan\project\models\CompaniesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Companies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="companies-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Companies', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Create Company Outgoing', ['outgoing/index'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'companyID',
            'companyName',
            'companyLocation:ntext',
            'companyEmail:email',
            'companyPhone',
            'employees',
            [
                'attribute' => 'Payment ',
                'value' =>  function ($model) {
                    if($model->payment == 1){
                        $model->payment = 'Paid';
                        return  $model->payment;
                    }else{
                        $model->payment  = 'Not Paid';
                        return $model->payment ;
                    }
                }
            ],
            'note:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
