<?php
/* @var $this ContinentesController */
/* @var $model Continentes */

$this->breadcrumbs=array(
	'Continentes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Continentes', 'url'=>array('index')),
	array('label'=>'Manage Continentes', 'url'=>array('admin')),
);
?>

<h1>Create Continentes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>