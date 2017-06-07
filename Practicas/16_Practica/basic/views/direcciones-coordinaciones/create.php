<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DireccionesCoordinaciones */

$this->title = 'Crear Direcciones Coordinaciones';
$this->params['breadcrumbs'][] = ['label' => 'Direcciones Coordinaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="direcciones-coordinaciones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
