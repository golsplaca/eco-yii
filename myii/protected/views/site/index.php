<?php
/* @var $this SiteController */
	$this->pageTitle='Samya Shoes';

	if(isset($banners))
		$this->renderPartial('../ecoBanner/index', array('banners'=>$banners));


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

	$this->renderPartial('../ecoProdutos/produtos', array('produtos' => $produtos));
?>
</div>

