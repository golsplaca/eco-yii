<?php
/* @var $this EcoProdutosController */
/* @var $model EcoProdutos */
	if(isset($categorias)){
		$this->menu = $categorias;
		$this->menu[0]->carrinho = array();
	}

$this->breadcrumbs=array(
	'Produtos'=>array('index'),
	'Manage',
);


?>

<h1>Administrar Produtos</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'eco-produtos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pro_id',
		'pro_id_cagegoria',
		'pro_id_colecao',
		/*'pro_codigo',*/
		'pro_nome',
		/*'pro_descricao',
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
		'pro_qd',*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
