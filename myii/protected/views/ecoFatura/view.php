<?php
/* @var $this EcoFaturaController */
/* @var $model EcoFatura */

$this->breadcrumbs=array(
	'Eco Faturas'=>array('index'),
	$model->fat_id,
);

$this->menu=array(
	array('label'=>'List EcoFatura', 'url'=>array('index')),
	array('label'=>'Create EcoFatura', 'url'=>array('create')),
	array('label'=>'Update EcoFatura', 'url'=>array('update', 'id'=>$model->fat_id)),
	array('label'=>'Delete EcoFatura', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->fat_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EcoFatura', 'url'=>array('admin')),
);
?>

<h1>View EcoFatura #<?php echo $model->fat_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fat_id',
		'fat_id_cliente',
		'fat_object',
		'fat_endereco',
		'fat_status',
		'fat_codigo',
		'fat_data',
	),
)); ?>
