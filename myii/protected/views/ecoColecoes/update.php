<?php
/* @var $this EcoColecoesController */
/* @var $model EcoColecoes */

$this->breadcrumbs=array(
	'Eco Colecoes'=>array('index'),
	$model->col_guid=>array('view','id'=>$model->col_guid),
	'Update',
);

$this->menu=array(
	array('label'=>'List EcoColecoes', 'url'=>array('index')),
	array('label'=>'Create EcoColecoes', 'url'=>array('create')),
	array('label'=>'View EcoColecoes', 'url'=>array('view', 'id'=>$model->col_guid)),
	array('label'=>'Manage EcoColecoes', 'url'=>array('admin')),
);
?>

<h1>Update EcoColecoes <?php echo $model->col_guid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>