<?php
/* @var $this ContinentesController */
/* @var $model Continentes */

$this->breadcrumbs=array(
	'Continentes'=>array('index'),
	$model->continente,
);

$this->menu=array(
	array('label'=>'List Continentes', 'url'=>array('index')),
	array('label'=>'Create Continentes', 'url'=>array('create')),
	array('label'=>'Update Continentes', 'url'=>array('update', 'id'=>$model->continente)),
	array('label'=>'Delete Continentes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->continente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Continentes', 'url'=>array('admin')),
);
?>

<h1>View Continentes #<?php echo $model->continente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'continente',
		'id',
	),
)); ?>
