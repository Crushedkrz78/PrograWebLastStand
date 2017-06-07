<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Entidades */

$this->title = 'Actualizar Entidades: ' . $model->clave;
$this->params['breadcrumbs'][] = ['label' => 'Entidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->clave, 'url' => ['view', 'id' => $model->clave]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="entidades-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
