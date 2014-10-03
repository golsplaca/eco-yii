<?php
/* @var $this EcoProdutosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Eco Produtoses',
);

$this->menu=array(
	array('label'=>'Create EcoProdutos', 'url'=>array('create')),
	array('label'=>'Manage EcoProdutos', 'url'=>array('admin')),
);
?>



<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
