<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Escuelas */

$this->title = 'Actualizar Escuelas: ' . $model->id_escuela;
$this->params['breadcrumbs'][] = ['label' => 'Escuelas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_escuela, 'url' => ['view', 'id' => $model->id_escuela]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="escuelas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
