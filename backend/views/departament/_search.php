<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DepartamentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departament-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'dep_name') ?>

    <?= $form->field($model, 'dep_city') ?>

    <?= $form->field($model, 'dep_street') ?>

    <?= $form->field($model, 'dep_building') ?>

    <?php // echo $form->field($model, 'dep_office') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
