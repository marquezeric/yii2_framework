<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Laptop */

$this->title = 'Create Laptop';
$this->params['breadcrumbs'][] = ['label' => 'Laptops', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laptop-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
