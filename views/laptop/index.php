<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LaptopSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registro de Laptops';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laptop-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Laptop', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'num_serie',
            'marca',
            'modelo',
            'procesador',
            'memoria',
            // 'discod',
            // 'sis_operativo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
