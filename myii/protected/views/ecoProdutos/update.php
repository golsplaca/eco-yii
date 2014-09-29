<?php
/* @var $this EcoProdutosController */
/* @var $model EcoProdutos */

$this->breadcrumbs=array(
	'Eco Produtoses'=>array('index'),
	$model->pro_id=>array('view','id'=>$model->pro_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EcoProdutos', 'url'=>array('index')),
	array('label'=>'Create EcoProdutos', 'url'=>array('create')),
	array('label'=>'View EcoProdutos', 'url'=>array('view', 'id'=>$model->pro_id)),
	array('label'=>'Manage EcoProdutos', 'url'=>array('admin')),
);
?>

<h1>Update EcoProdutos <?php echo $model->pro_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>