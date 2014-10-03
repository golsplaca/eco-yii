<?php
/* @var $this EcoUsuarioController */
/* @var $model EcoUsuario */

$this->breadcrumbs=array(
	'Eco Usuarios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EcoUsuario', 'url'=>array('index')),
	array('label'=>'Create EcoUsuario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#eco-usuario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Eco Usuarios</h1>

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
	'id'=>'eco-usuario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'usu_id',
		'usu_nivel',
		'usu_login',
		'usu_senha',
		'usu_nome',
		'usu_email',
		/*
		'usu_fone',
		'usu_nascimento',
		'usu_cpf',
		'usu_rg',
		'usu_endereco',
		'usu_estado',
		'usu_cidade',
		'usu_numero',
		'usu_fonr_cel',
		'usu_cep',
		'usu_data',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
