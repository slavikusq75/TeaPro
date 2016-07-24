<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PriceOfGoods */

$this->title = 'Create Price Of Goods';
$this->params['breadcrumbs'][] = ['label' => 'Price Of Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="price-of-goods-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
