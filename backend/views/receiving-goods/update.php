<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ReceivingGoods */

$this->title = 'Update Receiving Goods: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Receiving Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="receiving-goods-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
