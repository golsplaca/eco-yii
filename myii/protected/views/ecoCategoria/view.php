<?php
/* @var $this EcoCategoriaController */
/* @var $model EcoCategoria */

$this->breadcrumbs=array(
	'Eco Categorias'=>array('index'),
	$model->cat_id,
);

$this->menu=array(
	array('label'=>'List EcoCategoria', 'url'=>array('index')),
	array('label'=>'Create EcoCategoria', 'url'=>array('create')),
	array('label'=>'Update EcoCategoria', 'url'=>array('update', 'id'=>$model->cat_id)),
	array('label'=>'Delete EcoCategoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cat_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EcoCategoria', 'url'=>array('admin')),
);
?>

<h1>View EcoCategoria #<?php echo $model->cat_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cat_id',
		'cat_nome',
		'cat_data',
		)
	)); 
?>