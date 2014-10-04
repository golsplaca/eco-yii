<?php
/* @var $this EcoColecoesController */
/* @var $model EcoColecoes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'col_guid'); ?>
		<?php echo $form->textField($model,'col_guid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'col_nome'); ?>
		<?php echo $form->textField($model,'col_nome',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->