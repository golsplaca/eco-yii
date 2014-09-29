<?php
/* @var $this EcoProdutosController */
/* @var $model EcoProdutos */

$this->breadcrumbs=array(
	'Eco Produtoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EcoProdutos', 'url'=>array('index')),
	array('label'=>'Manage EcoProdutos', 'url'=>array('admin')),
);
?>

<h1>Create EcoProdutos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>