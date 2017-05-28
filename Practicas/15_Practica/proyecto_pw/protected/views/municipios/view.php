<?php
/* @var $this MunicipiosController */
/* @var $model Municipios */

$this->breadcrumbs=array(
	'Municipioses'=>array('index'),
	$model->id_municipio,
);

$this->menu=array(
	array('label'=>'List Municipios', 'url'=>array('index')),
	array('label'=>'Create Municipios', 'url'=>array('create')),
	array('label'=>'Update Municipios', 'url'=>array('update', 'id'=>$model->id_municipio)),
	array('label'=>'Delete Municipios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_municipio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Municipios', 'url'=>array('admin')),
);
?>

<h1>View Municipios #<?php echo $model->id_municipio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_municipio',
		'clave',
		'nombre',
		'id_estado',
	),
)); ?>
