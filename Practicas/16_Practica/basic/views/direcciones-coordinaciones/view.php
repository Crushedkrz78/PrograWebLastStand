<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DireccionesCoordinaciones */

$this->title = $model->id_direccion;
$this->params['breadcrumbs'][] = ['label' => 'Direcciones Coordinaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="direcciones-coordinaciones-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_direccion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_direccion], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro que quieres eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_direccion',
            'nombre',
            'letras',
        ],
    ]) ?>

</div>
