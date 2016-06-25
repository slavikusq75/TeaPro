<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SellingGoods */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Selling Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="selling-goods-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
            'id',
            'measure',
            'value',
            'our_price',
            'created_at',
            'updated_at',
            'sorts_of_goods_id',
            'user_id',
            'departament_id',
        ],
    ]) ?>

</div>
