<?php
/* @var $this EscuelasController */
/* @var $model Escuelas */

$this->breadcrumbs=array(
	'Escuelas'=>array('index'),
	$model->id_escuela,
);

$this->menu=array(
	array('label'=>'List Escuelas', 'url'=>array('index')),
	array('label'=>'Create Escuelas', 'url'=>array('create')),
	array('label'=>'Update Escuelas', 'url'=>array('update', 'id'=>$model->id_escuela)),
	array('label'=>'Delete Escuelas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_escuela),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Escuelas', 'url'=>array('admin')),
);
?>

<h1>View Escuelas #<?php echo $model->id_escuela; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_escuela',
		'escuela',
		'id_institucion',
		'id_municipio',
	),
)); ?>
