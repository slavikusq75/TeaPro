<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CashTransactionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cash Transactions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cash-transaction-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cash Transaction', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cash_in',
            'cash_out',
            'created_at',
            'updated_at',
            // 'cash_transaction_reason_id',
            // 'user_id',
            // 'departament_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
