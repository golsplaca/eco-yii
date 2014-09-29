<?php
/* @var $this EcoProdutosController */
/* @var $model EcoProdutos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'eco-produtos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_id_cagegoria'); ?>
		<?php echo $form->textField($model,'pro_id_cagegoria'); ?>
		<?php echo $form->error($model,'pro_id_cagegoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_codigo'); ?>
		<?php echo $form->textField($model,'pro_codigo'); ?>
		<?php echo $form->error($model,'pro_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_nome'); ?>
		<?php echo $form->textField($model,'pro_nome',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'pro_nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_descricao'); ?>
		<?php echo $form->textField($model,'pro_descricao',array('size'=>60,'maxlength'=>400)); ?>
		<?php echo $form->error($model,'pro_descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_preco_de'); ?>
		<?php echo $form->textField($model,'pro_preco_de',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pro_preco_de'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_preco_por'); ?>
		<?php echo $form->textField($model,'pro_preco_por',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pro_preco_por'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_data'); ?>
		<?php echo $form->textField($model,'pro_data'); ?>
		<?php echo $form->error($model,'pro_data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_tamanho'); ?>
		<?php echo $form->textField($model,'pro_tamanho',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'pro_tamanho'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_status'); ?>
		<?php echo $form->textField($model,'pro_status'); ?>
		<?php echo $form->error($model,'pro_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->