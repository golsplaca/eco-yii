<?php
/* @var $this EcoColecoesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Eco Colecoes',
);

$this->menu=array(
	array('label'=>'Create EcoColecoes', 'url'=>array('create')),
	array('label'=>'Manage EcoColecoes', 'url'=>array('admin')),
);
?>

<h1>Eco Colecoes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
