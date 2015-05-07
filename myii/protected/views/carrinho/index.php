<?php
 			$this->breadcrumbs=array('Carrinho de compras');

	if(isset($categorias)){
		$this->menu = $categorias;
		$this->menu[0]->carrinho = array();
	}

	if(isset($colecoes))
		$this->renderPartial('../ecoColecoes/index', array('colecoes'=>$colecoes));

	echo '<div class="col-md-9 col-md-9-produtos">';

	
?>