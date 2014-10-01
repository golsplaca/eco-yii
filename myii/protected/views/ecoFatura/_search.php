<?php
/* @var $this EcoFaturaController */
/* @var $model EcoFatura */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'fat_id'); ?>
		<?php echo $form->textField($model,'fat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fat_id_cliente'); ?>
		<?php echo $form->textField($model,'fat_id_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fat_object'); ?>
		<?php echo $form->textArea($model,'fat_object',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fat_endereco'); ?>
		<?php echo $form->textField($model,'fat_endereco'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fat_status'); ?>
		<?php echo $form->textField($model,'fat_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fat_codigo'); ?>
		<?php echo $form->textField($model,'fat_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fat_data'); ?>
		<?php echo $form->textField($model,'fat_data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->