<?php
/* @var $this ProdutosController */
/* @var $model Produtos */

$this->breadcrumbs=array(
	'Produtoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Produtos', 'url'=>array('index')),
	array('label'=>'Create Produtos', 'url'=>array('create')),
	array('label'=>'View Produtos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Produtos', 'url'=>array('admin')),
);
?>

<h1>Update Produtos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>