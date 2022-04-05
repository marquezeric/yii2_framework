<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PrestamoSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prestamo de Laptops';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prestamo-index">

    // <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Prestamo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_prestamo',
            'fec_prestamo',
            'fec_devolucion',
            'usr_responsable',
            'usr_solicitante',
            'num_serie',
            // 'observaciones',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
