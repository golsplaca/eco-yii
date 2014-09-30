<?php
/* @var $this EcoCategoriaController */
/* @var $dataProvider CActiveDataProvider */
if(isset($_GET['json'])){
$this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	)); 

}else{

	$this->breadcrumbs=array(
		'Eco Categorias',
	);

	$this->menu=array(
		array('label'=>'Create EcoCategoria', 'url'=>array('create')),
		array('label'=>'Manage EcoCategoria', 'url'=>array('admin')),
	);
	?>


	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	)); 
}
	?>

