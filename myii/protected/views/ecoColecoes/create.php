<?php
/* @var $this EcoColecoesController */
/* @var $model EcoColecoes */

$this->breadcrumbs=array(
	'Eco Colecoes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EcoColecoes', 'url'=>array('index')),
	array('label'=>'Manage EcoColecoes', 'url'=>array('admin')),
);
?>

<h1>Create EcoColecoes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>