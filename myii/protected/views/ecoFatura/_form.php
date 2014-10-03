<?php
/* @var $this EcoFaturaController */
/* @var $model EcoFatura */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'eco-fatura-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fat_id_cliente'); ?>
		<?php echo $form->textField($model,'fat_id_cliente'); ?>
		<?php echo $form->error($model,'fat_id_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fat_object'); ?>
		<?php echo $form->textArea($model,'fat_object',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'fat_object'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fat_endereco'); ?>
		<?php echo $form->textField($model,'fat_endereco', array('size' => 5)); ?>
		<?php echo $form->error($model,'fat_endereco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fat_status'); ?>
<?php echo $form->dropDownList($model,'fat_status', array('1' => 'Em andamento', '2' => 'Finalizada', '3' => 'Cancelada')); ?>
		<?php echo $form->error($model,'fat_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->