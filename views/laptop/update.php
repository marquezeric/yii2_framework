<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Laptop */

$this->title = 'Update Laptop: ' . $model->num_serie;
$this->params['breadcrumbs'][] = ['label' => 'Laptops', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->num_serie, 'url' => ['view', 'id' => $model->num_serie]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="laptop-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
