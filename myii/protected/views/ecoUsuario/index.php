<?php
/* @var $this EcoUsuarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Eco Usuarios',
);

$this->menu=array(
	array('label'=>'Create EcoUsuario', 'url'=>array('create')),
	array('label'=>'Manage EcoUsuario', 'url'=>array('admin')),
);
?>

<h1>Eco Usuarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
