<?php
/* @var $this ProdutosController */
/* @var $dataProvider CActiveDataProvider */
	
if(isset($_GET['json'])){
$this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	)); 

}else{

	$this->breadcrumbs=array(
		'Produtoses',
	);

	$this->menu=array(
		array('label'=>'Create Produtos', 'url'=>array('create')),
		array('label'=>'Manage Produtos', 'url'=>array('admin')),
	);
	
	echo "<h1>Produtoses</h1>";

	$this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	)); 
}



?>
