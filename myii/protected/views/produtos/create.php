<?php
/* @var $this ProdutosController */
/* @var $model Produtos */

$this->breadcrumbs=array(
	'Produtoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Produtos', 'url'=>array('index')),
	array('label'=>'Manage Produtos', 'url'=>array('admin')),
);
?>

<h1>Create Produtos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>