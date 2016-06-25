<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CashTransactionReason */

$this->title = 'Update Cash Transaction Reason: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cash Transaction Reasons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cash-transaction-reason-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
