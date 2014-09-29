<?php
/* @var $this EcoBannerController */
/* @var $model EcoBanner */

$this->breadcrumbs=array(
	'Eco Banners'=>array('index'),
	$model->ba_guid,
);

$this->menu=array(
	array('label'=>'List EcoBanner', 'url'=>array('index')),
	array('label'=>'Create EcoBanner', 'url'=>array('create')),
	array('label'=>'Update EcoBanner', 'url'=>array('update', 'id'=>$model->ba_guid)),
	array('label'=>'Delete EcoBanner', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ba_guid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EcoBanner', 'url'=>array('admin')),
);
?>

<h1>View EcoBanner #<?php echo $model->ba_guid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ba_guid',
		'pro_guid',
		'ba_nome',
		'ba_data',
		'ba_imagem',
		'status',
	),
)); ?>
