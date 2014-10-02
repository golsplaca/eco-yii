<?php
/* @var $this EcoUsuarioController */
/* @var $model EcoUsuario */

$this->breadcrumbs=array(
	'Eco Usuarios'=>array('index'),
	$model->usu_id=>array('view','id'=>$model->usu_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EcoUsuario', 'url'=>array('index')),
	array('label'=>'Create EcoUsuario', 'url'=>array('create')),
	array('label'=>'View EcoUsuario', 'url'=>array('view', 'id'=>$model->usu_id)),
	array('label'=>'Manage EcoUsuario', 'url'=>array('admin')),
);
?>

<h1>Update EcoUsuario <?php echo $model->usu_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>