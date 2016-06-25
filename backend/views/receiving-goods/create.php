<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ReceivingGoods */

$this->title = 'Create Receiving Goods';
$this->params['breadcrumbs'][] = ['label' => 'Receiving Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="receiving-goods-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
