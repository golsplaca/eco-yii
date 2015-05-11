<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/protected/views/site/css/contact.css" />

<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contato';
$this->breadcrumbs=array(
	'Contato',
);
	if(isset($categorias)){
		$this->menu = $categorias;
		$this->menu[0]->carrinho = array();
	}
	if(isset($colecoes))
		$this->renderPartial('../ecoColecoes/index', array('colecoes'=>$colecoes));
?>
<div class="col-md-9 col-md-9-produtos">
	<h1>Contato</h1>

	<?php if(Yii::app()->user->hasFlash('contact')): ?>

	<div class="flash-success">
		<?php echo Yii::app()->user->getFlash('contact'); ?>
	</div>

	<?php else: ?>

	<p>
	//	
	</p>

	<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'contact-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>

		<?php echo $form->errorSummary($model); ?>

		<div class="row">
			<?php echo $form->labelEx($model,'name'); ?>
			<?php echo $form->textField($model,'name'); ?>
			<?php echo $form->error($model,'name'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'email'); ?>
			<?php echo $form->textField($model,'email'); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'subject'); ?>
			<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'subject'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'body'); ?>
			<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'body'); ?>
		</div>

		<?php if(CCaptcha::checkRequirements()): ?>
		<div class="row">
			<?php echo $form->labelEx($model,'verifyCode'); ?>
			<div>
			<?php $this->widget('CCaptcha'); ?>
			<?php echo $form->textField($model,'verifyCode'); ?>
			</div>
			<div class="hint">//</div>
			<?php echo $form->error($model,'verifyCode'); ?>
		</div>
		<?php endif; ?>

		<div class="row buttons">
			<?php echo CHtml::submitButton('Submit'); ?>
		</div>

	<?php $this->endWidget(); ?>

	</div><!-- form -->

	<?php endif; ?>
</div>