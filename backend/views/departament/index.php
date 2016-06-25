<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DepartamentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Departaments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departament-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Departament', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'dep_name',
            'dep_city',
            'dep_street',
            'dep_building',
            // 'dep_office',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
