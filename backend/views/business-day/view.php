<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\BusinessDay */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Business Days', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="business-day-view">

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
            'begining_balance',
            'end_balance',
            'debit',
            'credit',
            'created_at',
            'updated_at',
            'selling_goods_id',
            'cash_transaction_id',
            'user_id',
            'departament_id',
        ],
    ]) ?>

</div>
