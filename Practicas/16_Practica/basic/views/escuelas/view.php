<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Escuelas */

$this->title = $model->id_escuela;
$this->params['breadcrumbs'][] = ['label' => 'Escuelas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="escuelas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_escuela], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_escuela], [
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
            'id_escuela',
            'escuela',
            'id_institucion',
            'id_municipio',
        ],
    ]) ?>

</div>
