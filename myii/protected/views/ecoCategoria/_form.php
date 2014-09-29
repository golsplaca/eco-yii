<?php
/* @var $this EcoCategoriaController */
/* @var $model EcoCategoria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'eco-categoria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_nome'); ?>
		<?php echo $form->textField($model,'cat_nome',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'cat_nome'); ?>
	</div>

	<div class="row" style="display:none;">
		<?php echo $form->labelEx($model,'cat_data'); ?>
		<?php echo $form->textField($model,'cat_data', array('value' => date("Y-m-d"))); ?>
		<?php echo $form->error($model,'cat_data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->