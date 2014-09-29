<?php
/* @var $this EcoBannerController */
/* @var $model EcoBanner */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'eco-banner-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data')
	)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_guid'); ?>
		<?php echo $form->textField($model,'pro_guid', array('size'=>10,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'pro_guid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ba_nome'); ?>
		<?php echo $form->textField($model,'ba_nome',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ba_nome'); ?>
	</div>

	<div class="row" style="display:none;">
		<?php echo $form->labelEx($model,'ba_data'); ?>
		<?php echo $form->textField($model,'ba_data', array('value' => date("Y-m-d"))); ?>
		<?php echo $form->error($model,'ba_data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ba_imagem'); ?>
        <?php echo CHtml::activeFileField($model, 'ba_imagem'); ?>
		<?php echo $form->error($model,'ba_imagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
 		<?php echo $form->dropDownList($model, 'status', array('1'=>'ativo', '0' => 'inativo')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->