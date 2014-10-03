<?php
/* @var $this EcoFaturaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Eco Faturas',
);

$this->menu=array(
	array('label'=>'Create EcoFatura', 'url'=>array('create')),
	array('label'=>'Manage EcoFatura', 'url'=>array('admin')),
);
?>

<h1>Eco Faturas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
