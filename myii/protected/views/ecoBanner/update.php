<?php
/* @var $this EcoBannerController */
/* @var $model EcoBanner */

$this->breadcrumbs=array(
	'Eco Banners'=>array('index'),
	$model->ba_guid=>array('view','id'=>$model->ba_guid),
	'Update',
);

$this->menu=array(
	array('label'=>'List EcoBanner', 'url'=>array('index')),
	array('label'=>'Create EcoBanner', 'url'=>array('create')),
	array('label'=>'View EcoBanner', 'url'=>array('view', 'id'=>$model->ba_guid)),
	array('label'=>'Manage EcoBanner', 'url'=>array('admin')),
);
?>

<h1>Update EcoBanner <?php echo $model->ba_guid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>