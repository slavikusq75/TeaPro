<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BusinessDay */

$this->title = 'Create Business Day';
$this->params['breadcrumbs'][] = ['label' => 'Business Days', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="business-day-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
