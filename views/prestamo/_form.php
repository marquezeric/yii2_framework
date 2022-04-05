<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Prestamo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prestamo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fec_prestamo')->textInput() ?>

    <?= $form->field($model, 'fec_devolucion')->textInput() ?>

    <?= $form->field($model, 'usr_responsable')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usr_solicitante')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_serie')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observaciones')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
