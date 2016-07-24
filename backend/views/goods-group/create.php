<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\GoodsGroup */

$this->title = 'Create Goods Group';
$this->params['breadcrumbs'][] = ['label' => 'Goods Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-group-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
