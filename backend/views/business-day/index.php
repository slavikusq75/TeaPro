<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BusinessDaySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Business Days';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="business-day-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Business Day', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'begining_balance',
            'end_ balance',
            'debit',
            'credit',
            // 'created_at',
            // 'updated_at',
            // 'selling_goods_id',
            // 'cash_transaction_id',
            // 'user_id',
            // 'departament_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
