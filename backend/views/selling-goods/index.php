<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SellingGoodsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Selling Goods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="selling-goods-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Selling Goods', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'measure',
            'value',
            'our_price',
            'created_at',
            // 'updated_at',
            // 'sorts_of_goods_id',
            // 'user_id',
            // 'departament_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
