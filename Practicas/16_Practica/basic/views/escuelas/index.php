<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EscuelasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Escuelas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="escuelas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Escuelas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_escuela',
            'escuela',
            'id_institucion',
            'id_municipio',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
