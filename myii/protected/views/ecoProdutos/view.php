<?php 
	$this->breadcrumbs=array('Produtos', $model->pro_nome); 
	if(isset($categorias)){
		$this->menu = $categorias;
		$this->menu[0]->carrinho = array();
	}

?>
 <div class="col-md-12 col-md-9-produtos">

    <!-- Include Cloud Zoom CSS. -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/protected/views/ecoProdutos/components/cloudzoom.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/protected/views/ecoProdutos/css/view.css" />
        <!-- Include Cloud Zoom script. -->
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/protected/views/ecoProdutos/components/cloudzoom.js"></script>

        <!-- Call quick start function. -->
        <script type="text/javascript">
            function carregarGaleria(){
                CloudZoom.quickStart();
                $('.cloudzoom-ajax-loader').hide();
            }
           setTimeout(carregarGaleria, 500);
        </script>    

        <div class="col-sm-5" style="text-align:center; padding:0;">
            <img class = "cloudzoom" src = "protected/views/ecoProdutos/imagens/<?php echo $model->pro_img_1; ?>"
                 data-cloudzoom = "zoomImage: 'protected/views/ecoProdutos/imagens/<?php echo $model->pro_img_1; ?>'" />
            <br/>
            <?php 
            	foreach ($model as $k => $v) {
            		if(strpos($k, 'pro_img_') === 0){
            			echo '<img ng-repeat="i in imgProduto" class = '."'cloudzoom-gallery'".' style="width:80px; height:80px;" 
            				  src = "protected/views/ecoProdutos/imagens/'.$v.'"  
           					  data-cloudzoom = "useZoom: '."'.cloudzoom', image: 'protected/views/ecoProdutos/imagens/".$v."', zoomImage: 'protected/views/ecoProdutos/imagens/".$v."'".'" >';
            		}
            	}
            ?>

        </div>

        <div class="col-sm-7">
           <h3><?php echo $model->pro_nome; ?></h3>
           <div style="float:right; font-size:px; font-style:italic; margin:3px 30px 0 0;">Cód: <?php echo $model->pro_codigo; ?></div>
           <hr />
           <div class="col-sm-12" >
              <div class="popover bottom col-sm-12" style="display:block; margin:-10px; padding:0px; z-index:0; position:relative; border-radius:0; min-width:100%;">
                <div class="arrow"></div>
                <h3 class="popover-title" style="font-weight:bold;">Descrição</h3>

                <div class="popover-content">
                  <p><?php echo $model->pro_descricao; ?></p>
                </div>
              </div>
           </div>

           <div class="col-sm-12" style="margin-top:20px;">

            De <span style="font-weight:bold;"> R$ <?php echo $model->pro_preco_de; ?></span><br />
            Por <span style="font-weight:bold;"> R$ <?php echo $model->pro_preco_por; ?></span> 

            <span style="font-size:12px; font-style:italic;"> à vista </span>
           </div>

           <div class="col-sm-12" style="margin-top:20px;  min-height:25px;">
            <div style="float:left; font-weight:bold;">Tamanho:</div>
            <div class="classTamanho" style="float:left;">

              <div class="tamanho_sandalia" >
      					<?php echo CHtml::dropDownList('fooBarTamanho', '', array('0' => 'Selecione'), array(
      					    'class' => 'form-control'
      					)); ?>            
              </div>

            </div>
           </div>
       
           <!--valida tamanhho-->
           <div class="col-sm-12" style="margin-top:10px; ">
            <div class="alert alert-danger alert-msg-tamanho" style="position:relative; display:none;" role="alert"></div>
           </div>

          <div class="col-sm-12" style="margin-top:10px;">
            <a href="?r=ecoCarrinho/add&add=<?php echo $model->pro_id; ?>" class="btn btn-danger">
              Comprar <i class="glyphicon glyphicon-shopping-cart"></i>
            </a>
            <a href="?r=ecoProdutos" class="btn btn-default btn-continuar-comprando">
              Continuar comprando <i class="glyphicon glyphicon-ok"></i>
            </a>
          </div>
 		</div>


    <div class="fb-post" data-href="https://www.globo.com.br" data-width="500"></div>
</div>
<script>
  
$(document).ready(function(){

  $('body').on('change','#fooBarTamanho',function(){jQuery.yii.submitForm(this,'',{});

  $('body').delegate("div.cloudzoom-blank", "hover", function(){
    if($(this).text() == 'Unlicensed Cloud Zoom'){ 
      //$(this).hide(); 
    }; 
  });
});
</script>

