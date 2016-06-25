<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SortsOfGoods */

$this->title = 'Create Sorts Of Goods';
$this->params['breadcrumbs'][] = ['label' => 'Sorts Of Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sorts-of-goods-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
