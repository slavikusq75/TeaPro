<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PriceOfGoods */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Price Of Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="price-of-goods-view">

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
            'our_price',
            'sorts_of_goods_id',
            'created_at',
            'updated_at',
            'user_id',
            'departament_id',
        ],
    ]) ?>

</div>
