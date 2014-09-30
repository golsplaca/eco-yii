<?php
/* @var $this EcoProdutosController */
/* @var $model EcoProdutos */

$this->breadcrumbs=array(
	'Eco Produtoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EcoProdutos', 'url'=>array('index')),
	array('label'=>'Create EcoProdutos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#eco-produtos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Eco Produtoses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'eco-produtos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pro_id',
		'pro_id_cagegoria',
		'pro_codigo',
		'pro_nome',
		'pro_descricao',
		'pro_preco_de',
		/*
		'pro_preco_por',
		'pro_data',
		'pro_tamanho',
		'pro_status',
		'pro_img_1',
		'pro_img_2',
		'pro_img_3',
		'pro_img_4',
		'pro_img_5',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
