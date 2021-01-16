<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model kayayusufalparslan\project\models\Companies */

$this->title = $model->companyID;
$this->params['breadcrumbs'][] = ['label' => 'Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="companies-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->companyID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->companyID], [
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
        ],
    ]) ?>

</div>
