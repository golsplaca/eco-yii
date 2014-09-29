<?php


$this->menu=array(
	array('label'=>'Create EcoBanner', 'url'=>array('create')),
	array('label'=>'Manage EcoBanner', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
