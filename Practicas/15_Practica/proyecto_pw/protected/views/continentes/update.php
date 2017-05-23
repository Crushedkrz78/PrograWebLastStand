<?php
/* @var $this ContinentesController */
/* @var $model Continentes */

$this->breadcrumbs=array(
	'Continentes'=>array('index'),
	$model->continente=>array('view','id'=>$model->continente),
	'Update',
);

$this->menu=array(
	array('label'=>'List Continentes', 'url'=>array('index')),
	array('label'=>'Create Continentes', 'url'=>array('create')),
	array('label'=>'View Continentes', 'url'=>array('view', 'id'=>$model->continente)),
	array('label'=>'Manage Continentes', 'url'=>array('admin')),
);
?>

<h1>Update Continentes <?php echo $model->continente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>