<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Idiomas */

$this->title = 'Actualizar Idiomas: ' . $model->idioma;
$this->params['breadcrumbs'][] = ['label' => 'Idiomas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idioma, 'url' => ['view', 'id' => $model->idioma]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="idiomas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
