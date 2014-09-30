<?php
/* @var $this EcoCategoriaController */
/* @var $model EcoCategoria */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cat_id'); ?>
		<?php echo $form->textField($model,'cat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_nome'); ?>
		<?php echo $form->textField($model,'cat_nome',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_data'); ?>
		<?php echo $form->textField($model,'cat_data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->