<?php
/* @var $this EcoUsuarioController */
/* @var $model EcoUsuario */

$this->breadcrumbs=array(
	'Eco Usuarios'=>array('index'),
	$model->usu_id,
);

$this->menu=array(
	array('label'=>'List EcoUsuario', 'url'=>array('index')),
	array('label'=>'Create EcoUsuario', 'url'=>array('create')),
	array('label'=>'Update EcoUsuario', 'url'=>array('update', 'id'=>$model->usu_id)),
	array('label'=>'Delete EcoUsuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->usu_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EcoUsuario', 'url'=>array('admin')),
);
?>

<h1>View EcoUsuario #<?php echo $model->usu_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'usu_id',
		'usu_nivel',
		'usu_login',
		'usu_senha',
		'usu_nome',
		'usu_email',
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
	),
)); ?>
