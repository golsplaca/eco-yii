<div class="col-sm-12">

  <div class="col-md-6">
  <form action="?r=ecoCarrinho/index" method="post">
    <div class="form-group" style="margin-top:11px;">
      
      <span class="errorMessage alert-error-cep">Digite o cep para entrega</span>
      <div id="grupo-campo-cep" class="input-group">
        <input type="text" class="form-control" name="cep" placeholder="Digite o CEP"
         name="cep" value="<?php echo $_SESSION['EcoCarrinho'][0]->cep; ?>">
        <span class="input-group-btn">
          <button id="consultar_cep" data-loading-text="Aguarde..." class="btn btn-primary" style="">Calcular</button>
        </span>
      </div>
    </div>
  </div>

  <div class="col-md-6 text-right">
    <?php 
  
      if($frete){
  
          $freteSac   = json_decode($frete[0]);
          $freteSedex = json_decode($frete[1]);

          echo '<h5 class="label label-carrinho">
                  <label style="text-align:left; font-weight: normal; line-height: 18px;">
                    <input type="radio" value="pac" name="box_carrinho_tipo_entrega" onclick="carrinho_selecionar_entrega(16.5,&quot;PAC&quot;);">&nbsp;&nbsp;
                    PAC: <b>R$ '.end($freteSac->valor).'</b> - Em até <b>'.end($freteSac->prazo).' dias úteis</b>.
                  </label>
                </h5>';
          echo '<h5 class="label label-carrinho">
                  <label style="text-align:left; font-weight: normal; line-height: 18px;">
                    <input type="radio" value="sedex" name="box_carrinho_tipo_entrega" onclick="carrinho_selecionar_entrega(16.5,&quot;PAC&quot;);">&nbsp;&nbsp;
                    SEDEX: <b>R$ '.end($freteSedex->valor).'</b> - Em até <b>'.end($freteSedex->prazo).' dias úteis</b>.
                  </label>
                </h5>';
      }
    ?>
    

   <!--  <h5 class="label label-carrinho">
    <label style="text-align:left; font-weight: normal; line-height: 18px;">
      <input type="radio" value="sedex" name="box_carrinho_tipo_entrega" onclick="carrinho_selecionar_entrega(34.7,&quot;SEDEX&quot;);">&nbsp;&nbsp;
      SEDEX: <b>R$ 34,70</b> - Em até <b>4 dias úteis</b>.
    </label>
    </h5> -->

  </div>
</div>