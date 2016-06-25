<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BusinessDay */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="business-day-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'begining_balance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'end_ balance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'debit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'credit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'selling_goods_id')->textInput() ?>

    <?= $form->field($model, 'cash_transaction_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'departament_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
