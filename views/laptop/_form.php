<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Laptop */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="laptop-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'num_serie')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modelo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'procesador')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'memoria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discod')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sis_operativo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
