<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Prestamo */

$this->title = 'Solicitud de Prestamo';
$this->params['breadcrumbs'][] = ['label' => 'Prestamos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prestamo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
