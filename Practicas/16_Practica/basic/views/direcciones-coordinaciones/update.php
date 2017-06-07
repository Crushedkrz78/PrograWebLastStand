<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DireccionesCoordinaciones */

$this->title = 'Actualizar Direcciones Coordinaciones: ' . $model->id_direccion;
$this->params['breadcrumbs'][] = ['label' => 'Direcciones Coordinaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_direccion, 'url' => ['view', 'id' => $model->id_direccion]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="direcciones-coordinaciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
