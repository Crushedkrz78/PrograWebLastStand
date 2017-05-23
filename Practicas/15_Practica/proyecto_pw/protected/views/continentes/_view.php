<?php
/* @var $this ContinentesController */
/* @var $data Continentes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('continente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->continente), array('view', 'id'=>$data->continente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />


</div>