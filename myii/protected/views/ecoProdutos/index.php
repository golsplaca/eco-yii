<?php 
	
	$this->breadcrumbs=array('Produtos');

	if(isset($categorias)){
		$this->menu = $categorias;
		$this->menu[0]->carrinho = array();
	}

	if(isset($colecoes))
		$this->renderPartial('../ecoColecoes/index', array('colecoes'=>$colecoes));

	echo '<div class="col-md-9 col-md-9-produtos">';

	
// $this->menu=array(
// 	array('label'=>'Create EcoProdutos', 'url'=>array('create')),
// 	array('label'=>'Manage EcoProdutos', 'url'=>array('admin')),
// );
	$this->renderPartial('produtos', array('produtos' => $produtos));
?>