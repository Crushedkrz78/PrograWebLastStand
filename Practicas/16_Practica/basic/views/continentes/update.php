<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Continentes */

$this->title = 'Actualizar Continentes: ' . $model->continente;
$this->params['breadcrumbs'][] = ['label' => 'Continentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->continente, 'url' => ['view', 'id' => $model->continente]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="continentes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
