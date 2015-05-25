<?php
// echo "<pre>";
// var_dump($model);
// echo "</pre>";

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
    <div class="col-sm-12">
      <h4 class="visible-xs">Produtos</h4>
      <table class="table carrinho-item">
        <thead class="hidden-xs">
          <tr><th colspan="2">Produto</th>
          <th>Preço</th>
          <th>Qtd.</th>
          <th class="text-right" colspan="2">Subtotal</th>
        </tr></thead>
        <tbody>
        <?php 
          $valor_total = 0.00;
          if($model){
            foreach ($model as $k => $v) {
              $valor_total += $v->params['preco'];
        ?>
          <tr class="carrinho_produto">
            <td class="_hidden-sm">
              <img class="carrinho-foto" src="http://static.cloud-boxloja.com/lojas/l0hsk/produtos/3bed4b73-4b94-4763-99b7-de3358dbb4e8_t260x260.jpg">
            </td>
            <td>
              <h5 class="produto-titulo" style="margin-top: 2px !important">
                <a href="#" target="_top">
                  <?=  $v->pro_nome ?>
                </a>
              </h5>
                <h6 class="produto-subtitulo">Medida: <?= $v->pro_tamanho ?></h6>
                <!-- <h6 class="produto-disponibilidade">PRONTA ENTREGA - PRAZO DE ATÉ 5 DIAS ÚTEIS PARA O ENVIO.</h6> -->
            </td>
            <td nowrap="" class="hidden-xs">
              R$ <?= $v->pro_preco_por ?>
            </td>
            <td class="hidden-xs text-center">
              <input type="text" class="form-control col-xs-1 qtd lg" style="text-align: center; width: 55px" 
              value="<?= $v->params['qt'] ?>" onchange="addCarrinho(this, '<?=  $v->pro_id ?>');">
            </td>
            <td class="hidden-xs">
              <p class="text-center">

                <a href="?r=ecoCarrinho/remove&remove=<?= $k ?>" id="produto_delete" target="_top" style="font-size: 14px; color: #888" title="Remover" >
                <i class="glyphicon glyphicon-trash"></i>
                </a>
              </p>
            </td>
            <td nowrap="" class="hidden-xs text-right">
              R$ <?= $v->params['preco'] ?>
            </td>
          </tr>
        <?php 
            }
          }
        ?>
        </tbody>
      </table>

        <h5 class="text-right">Subtotal R$ <?= $valor_total ?></h5>
    </div>

    <?php 
      if($model[0])
        $this->renderPartial('frete', array('frete' => $model[0]->frete));
    ?>
                
    <div class="col-sm-12 box_modal_carrinho_total" style="margin-top: 30px">
      <div class="row">
          <div class="col-xs-12 text-right">
            <h3 style="white-space: nowrap">Total: R$ <span>166,40</span></h3>
          </div>
      </div>
    </div>
    <div class="col-sm-12" style="margin-top: 30px">
      <div class="row">
        <div class="col-xs-3 col-sm-3">
          <a href="?r=ecoProdutos/index" class="btn btn-primary btn-sm" style="width:100%; border-radius:2px;">
            <span class="visible-sm visible-md visible-lg">Adicionar mais produtos</span><span class="visible-xs">←</span>
          </a>
        </div>
        <div class="col-xs-9 col-sm-3 col-sm-offset-6">
          <img id="ajax-endereco" src="/images/loading.gif" style="display:none;">
              <a href="?r=ecoFatura/create" id="btn-seguir-pagamento" class="btn-success btn btn-lg" style="width: 100%; border-radius:2px; font-weight: bold;" 
                      onclick="return finalizarCompra();">Pagamento</a>
        </div>
      </div>
    </div>
  </div>
</div>