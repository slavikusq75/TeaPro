<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PriceOfGoods */

$this->title = 'Update Price Of Goods: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Price Of Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="price-of-goods-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
