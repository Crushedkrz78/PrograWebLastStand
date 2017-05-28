<?php
/* @var $this EscuelasController */
/* @var $model Escuelas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'escuelas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($modelEscuelas); ?>

	<div class="row">
		<?php echo $form->labelEx($modelEscuelas,'id_escuela'); ?>
		<?php echo $form->textField($modelEscuelas,'id_escuela',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($modelEscuelas,'id_escuela'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelEscuelas,'escuela'); ?>
		<?php echo $form->textField($modelEscuelas,'escuela',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($modelEscuelas,'escuela'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelEscuelas,'id_institucion'); ?>
		<?php echo $form->textField($modelEscuelas,'id_institucion',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($modelEscuelas,'id_institucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelEscuelas,'id_municipio'); ?>
		<?php echo $form->select($modelEscuelas,'id_municipio'); ?>
		<?php echo $form->error($modelEscuelas,'id_municipio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($modelEscuelas->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->