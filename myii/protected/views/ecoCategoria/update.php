<?php
/* @var $this EcoCategoriaController */
/* @var $model EcoCategoria */

$this->breadcrumbs=array(
	'Eco Categorias'=>array('index'),
	$model->cat_id=>array('view','id'=>$model->cat_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EcoCategoria', 'url'=>array('index')),
	array('label'=>'Create EcoCategoria', 'url'=>array('create')),
	array('label'=>'View EcoCategoria', 'url'=>array('view', 'id'=>$model->cat_id)),
	array('label'=>'Manage EcoCategoria', 'url'=>array('admin')),
);
?>

<h1>Update EcoCategoria <?php echo $model->cat_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>