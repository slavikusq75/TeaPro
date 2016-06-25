<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SellingGoods */

$this->title = 'Create Selling Goods';
$this->params['breadcrumbs'][] = ['label' => 'Selling Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="selling-goods-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
