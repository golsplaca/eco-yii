<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/protected/views/site/css/login.css" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>//protected/views/site/js/login.js"></script>

<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Entrar';
 
	$this->breadcrumbs=array('Entrar');

	if(isset($categorias)){
		$this->menu = $categorias;
		$this->menu[0]->carrinho = array();
	}

?>
<div class="col-md-5 col-md-9-produtos">

	<h3>Minha conta</h3>

	<div class="form">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'login-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>

		<div class="row">
			<?php echo $form->labelEx($model,'username'); ?>
			<?php echo $form->textField($model,'username', array('placeholder'=>'email@dominio.com')); ?>
			<?php echo $form->error($model,'username'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'password'); ?>
			<?php echo $form->passwordField($model,'password', array('placeholder'=>'senha')); ?>
			<?php echo $form->error($model,'password'); ?>

		</div>

		<div class="row rememberMe">
			<?php echo $form->checkBox($model,'rememberMe'); ?>
			<?php echo $form->label($model,'rememberMe'); ?>
			<?php echo $form->error($model,'rememberMe'); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton('Entrar'); ?>
		</div>
		<div class="row button-fac">
			<div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="false"></div>
		</div>
		 <div id="fb-root"></div>

		<div id="status">
		</div>
	<?php $this->endWidget(); ?>
	</div><!-- form -->
<!-- 
<a  onclick="logout();">sair</a>
<a  onclick="checkLoginState();">sair</a> -->
<!-- <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button> -->
</div>

<div class="col-md-7 col-md-9-produtos">
	<?php $this->renderPartial('../ecoUsuario/_newUser', array('usuario'=>$usuario)); ?>
</div>