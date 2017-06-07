<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EscuelasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="escuelas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_escuela') ?>

    <?= $form->field($model, 'escuela') ?>

    <?= $form->field($model, 'id_institucion') ?>

    <?= $form->field($model, 'id_municipio') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reiniciar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
