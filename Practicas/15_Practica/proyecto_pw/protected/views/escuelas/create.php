<?php
/* @var $this EscuelasController */
/* @var $model Escuelas */

$this->breadcrumbs=array(
	'Escuelas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Escuelas', 'url'=>array('index')),
	array('label'=>'Manage Escuelas', 'url'=>array('admin')),
);
?>

<h1>Create Escuelas</h1>

<?php 
//$listaMunicipios = Municipios :: model() ->findAll();
$this->renderPartial('_form', array(
    'modelEscuelas'=>$modelEscuelas,
    'listaMunicipios'=>$listaMunicipios
)); 
?>