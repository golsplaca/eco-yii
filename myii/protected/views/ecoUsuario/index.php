<?php
/* @var $this EcoUsuarioController */
/* @var $dataProvider CActiveDataProvider */

	$this->breadcrumbs=array(
		'Minha conta',$model->usu_nome
	);

	if(isset($categorias)){
		$this->menu = $categorias;
		$this->menu[0]->carrinho = array();
	}

	if(isset($colecoes))
		$this->renderPartial('../ecoColecoes/index', array('colecoes'=>$colecoes));
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/protected/views/ecoUsuario/css/style.css" />

<div class="col-md-9 col-md-9-produtos">

<ul class="nav nav-tabs" role="tablist" id="myTab">
  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-list"></i> Pedidos</a></li>
  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Meus dados</a></li>
  <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
</ul>

<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="home">
  	


                  <h4 style="margin:30px">Seus pedidos</h4>


                  <p class="text-center">
                    Você ainda não realizou pedido na loja.
                  </p>




  </div>
  <div role="tabpanel" class="tab-pane" id="profile">
  	<?php $this->renderPartial('update', array('model'=>$model)); ?>
  </div>
  <div role="tabpanel" class="tab-pane" id="messages">...</div>
</div>

<script>
  $(function () {
    $('#myTab a[href="#profile"]').tab('show')
  });
</script>


</div>

