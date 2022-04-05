<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PrestamoSearchModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prestamo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_prestamo') ?>

    <?= $form->field($model, 'fec_prestamo') ?>

    <?= $form->field($model, 'fec_devolucion') ?>

    <?= $form->field($model, 'usr_responsable') ?>

    <?= $form->field($model, 'usr_solicitante') ?>

    <?php // echo $form->field($model, 'num_serie') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
