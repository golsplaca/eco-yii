<?php
/* @var $this EcoProdutosController */
/* @var $model EcoProdutos */

$this->breadcrumbs=array(
	'Eco Produtoses'=>array('index'),
	$model->pro_id,
);

$this->menu=array(
	array('label'=>'List EcoProdutos', 'url'=>array('index')),
	array('label'=>'Create EcoProdutos', 'url'=>array('create')),
	array('label'=>'Update EcoProdutos', 'url'=>array('update', 'id'=>$model->pro_id)),
	array('label'=>'Delete EcoProdutos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pro_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EcoProdutos', 'url'=>array('admin')),
);
?>

<h1>View EcoProdutos #<?php echo $model->pro_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pro_id',
		'pro_id_cagegoria',
		'pro_id_calecao',
		'pro_codigo',
		'pro_nome',
		'pro_descricao',
		'pro_preco_de',
		'pro_preco_por',
		'pro_data',
		'pro_tamanho',
		'pro_status',
		'pro_img_1',
		'pro_img_2',
		'pro_img_3',
		'pro_img_4',
		'pro_img_5',
		'pro_qd',
	),
)); ?>
