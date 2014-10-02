<?php
/* @var $this EcoUsuarioController */
/* @var $model EcoUsuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'usu_id'); ?>
		<?php echo $form->textField($model,'usu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usu_nivel'); ?>
		<?php echo $form->textField($model,'usu_nivel',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usu_login'); ?>
		<?php echo $form->textField($model,'usu_login',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usu_senha'); ?>
		<?php echo $form->textField($model,'usu_senha',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usu_nome'); ?>
		<?php echo $form->textField($model,'usu_nome',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usu_email'); ?>
		<?php echo $form->textField($model,'usu_email',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usu_fone'); ?>
		<?php echo $form->textField($model,'usu_fone',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usu_nascimento'); ?>
		<?php echo $form->textField($model,'usu_nascimento',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usu_cpf'); ?>
		<?php echo $form->textField($model,'usu_cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usu_rg'); ?>
		<?php echo $form->textField($model,'usu_rg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usu_endereco'); ?>
		<?php echo $form->textField($model,'usu_endereco',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usu_estado'); ?>
		<?php echo $form->textField($model,'usu_estado',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usu_cidade'); ?>
		<?php echo $form->textField($model,'usu_cidade',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usu_numero'); ?>
		<?php echo $form->textField($model,'usu_numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usu_fonr_cel'); ?>
		<?php echo $form->textField($model,'usu_fonr_cel',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usu_cep'); ?>
		<?php echo $form->textField($model,'usu_cep'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usu_data'); ?>
		<?php echo $form->textField($model,'usu_data',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->