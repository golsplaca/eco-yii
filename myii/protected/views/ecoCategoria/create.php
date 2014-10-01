<?php
/* @var $this EcoCategoriaController */
/* @var $model EcoCategoria */

$this->breadcrumbs=array(
	'Eco Categorias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EcoCategoria', 'url'=>array('index')),
	array('label'=>'Manage EcoCategoria', 'url'=>array('admin')),
);
?>

<h1>Create EcoCategoria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
