<?php
/* @var $this EscuelasController */
/* @var $data Escuelas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_escuela')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_escuela), array('view', 'id'=>$data->id_escuela)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('escuela')); ?>:</b>
	<?php echo CHtml::encode($data->escuela); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_institucion')); ?>:</b>
	<?php echo CHtml::encode($data->id_institucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_municipio')); ?>:</b>
	<?php echo CHtml::encode($data->id_municipio); ?>
	<br />


</div>