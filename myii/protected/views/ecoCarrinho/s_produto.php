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
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/protected/views/ecoCarrinho/css/index.css" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/protected/views/ecoCarrinho/js/controller.js"></script>
	
<article>
	<div>
		<span style="float:left;">Não à itens em seu carrinho, </span> 
      	<a href="?r=ecoProdutos/index">
        	<span class="visible-md visible-lg"> encontrar itens </span>
        </a>
    </div>
</article>
   