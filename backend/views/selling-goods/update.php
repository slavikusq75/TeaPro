<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SellingGoods */

$this->title = 'Update Selling Goods: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Selling Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="selling-goods-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
