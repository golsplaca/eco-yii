<?php
/* @var $this EcoColecoesController */
/* @var $model EcoColecoes */

$this->breadcrumbs=array(
	'Eco Colecoes'=>array('index'),
	$model->col_guid,
);

$this->menu=array(
	array('label'=>'List EcoColecoes', 'url'=>array('index')),
	array('label'=>'Create EcoColecoes', 'url'=>array('create')),
	array('label'=>'Update EcoColecoes', 'url'=>array('update', 'id'=>$model->col_guid)),
	array('label'=>'Delete EcoColecoes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->col_guid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EcoColecoes', 'url'=>array('admin')),
);
?>

<h1>View EcoColecoes #<?php echo $model->col_guid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'col_guid',
		'col_nome',
	),
)); ?>
