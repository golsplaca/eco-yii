<?php
/* @var $this EcoUsuarioController */
/* @var $model EcoUsuario */

$this->breadcrumbs=array(
	'Eco Usuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EcoUsuario', 'url'=>array('index')),
	array('label'=>'Manage EcoUsuario', 'url'=>array('admin')),
);
?>

<h3>Create EcoUsuario</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>