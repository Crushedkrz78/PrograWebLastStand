<?php
/* @var $this EscuelasController */
/* @var $model Escuelas */

$this->breadcrumbs=array(
	'Escuelases'=>array('index'),
	$model->id_escuela=>array('view','id'=>$model->id_escuela),
	'Update',
);

$this->menu=array(
	array('label'=>'List Escuelas', 'url'=>array('index')),
	array('label'=>'Create Escuelas', 'url'=>array('create')),
	array('label'=>'View Escuelas', 'url'=>array('view', 'id'=>$model->id_escuela)),
	array('label'=>'Manage Escuelas', 'url'=>array('admin')),
);
?>

<h1>Update Escuelas <?php echo $model->id_escuela; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>