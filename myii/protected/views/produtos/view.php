<?php
/* @var $this ProdutosController */
/* @var $model Produtos */

$this->breadcrumbs=array(
	'Produtoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Produtos', 'url'=>array('index')),
	array('label'=>'Create Produtos', 'url'=>array('create')),
	array('label'=>'Update Produtos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Produtos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Produtos', 'url'=>array('admin')),
);
?>

<h1>View Produtos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'codigo',
		'nome',
		'descricao',
		'preco_de',
		'preco_por',
		'data',
		'id_categoria',
	),
)); ?>
