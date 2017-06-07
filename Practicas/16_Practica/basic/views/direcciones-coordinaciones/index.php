<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DireccionesCoordinacionesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Direcciones Coordinaciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="direcciones-coordinaciones-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Direcciones Coordinaciones', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_direccion',
            'nombre',
            'letras',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
