<?php
/* @var $this EcoFaturaController */
/* @var $model EcoFatura */

$this->breadcrumbs=array(
	'Eco Faturas'=>array('index'),
	$model->fat_id=>array('view','id'=>$model->fat_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EcoFatura', 'url'=>array('index')),
	array('label'=>'Create EcoFatura', 'url'=>array('create')),
	array('label'=>'View EcoFatura', 'url'=>array('view', 'id'=>$model->fat_id)),
	array('label'=>'Manage EcoFatura', 'url'=>array('admin')),
);
?>

<h1>Update EcoFatura <?php echo $model->fat_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>