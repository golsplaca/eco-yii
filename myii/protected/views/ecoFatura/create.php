<?php
/* @var $this EcoFaturaController */
/* @var $model EcoFatura */

$this->breadcrumbs=array(
	'Eco Faturas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EcoFatura', 'url'=>array('index')),
	array('label'=>'Manage EcoFatura', 'url'=>array('admin')),
);
?>

<h1>Create EcoFatura</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>