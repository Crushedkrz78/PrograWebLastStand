<?php
/* @var $this EscuelasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Escuelas',
);

$this->menu=array(
	array('label'=>'Crear Escuelas', 'url'=>array('create')),
	array('label'=>'Administrar Escuelas', 'url'=>array('admin')),
);
?>

<h1>Escuelas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
