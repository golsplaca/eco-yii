<?php
/* @var $this EcoBannerController */
/* @var $model EcoBanner */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ba_guid'); ?>
		<?php echo $form->textField($model,'ba_guid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_guid'); ?>
		<?php echo $form->textField($model,'pro_guid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ba_nome'); ?>
		<?php echo $form->textField($model,'ba_nome',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ba_data'); ?>
		<?php echo $form->textField($model,'ba_data'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ba_imagem'); ?>
		<?php echo $form->textField($model,'ba_imagem',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->