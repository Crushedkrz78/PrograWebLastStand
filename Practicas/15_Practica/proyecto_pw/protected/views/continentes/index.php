<?php
/* @var $this ContinentesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Continentes',
);

$this->menu=array(
	array('label'=>'Crear Continentes', 'url'=>array('create')),
	array('label'=>'Administrar Continentes', 'url'=>array('admin')),
);
?>

<h1>Continentes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
