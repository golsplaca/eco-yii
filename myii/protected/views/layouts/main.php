<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework 
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />-->



	  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/components/bootstrap/dist/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/cs	s" href="<?php echo Yii::app()->request->baseUrl; ?>/components/font-awesome/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/components/rdash-ui/dist/css/rdash.css">
	  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />

	  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.min.js"></script>
	  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body onload="$('#<?php echo $this->id; ?>').css('color', '#d9534f');">
<div id="header" >
	<div class="container">
		<div id="logo" style="cursor:pointer" class="col-lg-2" 
		onclick="window.location.href='index.php?r=site/index'">
			<img src="public/images/logo.png" />
		</div>

		<div class="col-lg-10" style="font-size:12px;">
			<div class="col-lg-12" style="font-size:12px; padding-right: 35px;">
	          	<ul class="nav navbar-nav navbar-right">                
					<li style="text-align: center;" >
						<a href="index.php?r=ecoProdutos/index" id="ecoProdutos">
							<span class="glyphicon glyphicon glyphicon-list-alt" 
							style="font-size: 10px;"></span>
							<br> Produtos </a>
					</li>           
					<li style="text-align: center;">
						<a href="index.php?r=site/contact" id="<?php echo ($this->action->id == 'contact') ? 'site':''; ?>">
							<span class="glyphicon glyphicon-phone-alt" style="font-size: 10px;"></span>
							<br> Fale conosco </a>
					</li>

					<li style="text-align: center;">
						<a href="index.php?r=ecoUsuario/" id="ecoUsuario" >
							<span class="glyphicon glyphicon-user" style="font-size: 10px;"></span>
							<br> Minha conta </a>
					</li>     
	                <li style="text-align: center;">
	                	<a href="index.php?r=carrinho/" id="carrinho">
	                		<span class="glyphicon glyphicon-shopping-cart" style="font-size: 10px;"></span>
	                		<br> Carrinho</a>
	                </li>
	            </ul>
	        </div>

	        <div class="col-lg-12 categorias-header">
	        	<?php 
	        		if(isset($this->menu[0]->cat_nome)){
		        		foreach ($this->menu as $k => $v) {
		        			$cat_act = (isset($_GET['categoria']) && $v->cat_id == $_GET['categoria'])?'active':'';
		        			echo '<a href="index.php?r=ecoProdutos/index&categoria='.$v->cat_id.'" 
		        					 type="button" class="btn btn-default btn-xs '.$cat_act.'">'.
		        					$v->cat_nome.'</a>';
		        		}
		        	}
	        	?>	
			</div>
	    </div>

	</div>
</div><!-- header -->

	<div class="container" id="page">
		<div class="row row-page">
		 
			<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				)); ?><!-- breadcrumbs -->
			<?php endif?>

			<?php echo $content; ?>

		</div>
		<div class="clear"></div>
	</div><!-- page -->
	<div id="footer" class="container">
	<hr />


		<div class="col-md-3">
			
		</div>
		<div class="col-md-4">
			
		</div>

		<div class="col-md-5">
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-follow" data-href="https://www.facebook.com/samyashoes1" data-width="340" data-colorscheme="light" data-layout="standard" data-show-faces="true"></div>
			<div class="fb-page" data-href="https://www.facebook.com/samyashoes1" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/samyashoes1"><a href="https://www.facebook.com/samyashoes1">Samya Shoes</a></blockquote></div></div>
		</div>

<div class="col-md-12" style="margin-top:50px;">
	Copyright &copy; <?php echo date('Y'); ?> SAMYA SHOES.<br/>
</div>
	</div><!-- footer -->

</body>
</html>
