<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\data\ArrayProvider;

/* @var $this yii\web\View */
/* @var $model app\models\Escuelas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="escuelas-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php
    //foreach ( as $item)
    ?>

    <?= $form->field($model, 'id_escuela')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'escuela')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_institucion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_municipio')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
