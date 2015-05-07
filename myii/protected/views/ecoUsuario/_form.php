<?php
/* @var $this EcoUsuarioController */
/* @var $model EcoUsuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'eco-usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Os campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_nivel'); ?>
		<?php echo $form->dropDownList($model,'usu_nivel', 
				array('demo'=>'normal', 'admin'=>'administrador', 'inativo'=>'inativo')); ?>
		<?php echo $form->error($model,'usu_nivel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_login'); ?>
		<?php echo $form->textField($model,'usu_login',array('size'=>20,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'usu_login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_senha'); ?>
		<?php echo $form->passwordField($model,'usu_senha',array('size'=>20,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'usu_senha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_nome'); ?>
		<?php echo $form->textField($model,'usu_nome',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'usu_nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_email'); ?>
		<?php echo $form->textField($model,'usu_email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'usu_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_fone'); ?>
		<?php echo $form->textField($model,'usu_fone',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'usu_fone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_nascimento'); ?>
		<?php echo $form->textField($model,'usu_nascimento',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'usu_nascimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_cpf'); ?>
		<?php echo $form->textField($model,'usu_cpf'); ?>
		<?php echo $form->error($model,'usu_cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_rg'); ?>
		<?php echo $form->textField($model,'usu_rg'); ?>
		<?php echo $form->error($model,'usu_rg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_endereco'); ?>
		<?php echo $form->textField($model,'usu_endereco',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'usu_endereco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_estado'); ?>
		<?php echo $form->textField($model,'usu_estado',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'usu_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_cidade'); ?>
		<?php echo $form->textField($model,'usu_cidade',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'usu_cidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_numero'); ?>
		<?php echo $form->textField($model,'usu_numero'); ?>
		<?php echo $form->error($model,'usu_numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_fonr_cel'); ?>
		<?php echo $form->textField($model,'usu_fonr_cel',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'usu_fonr_cel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_cep'); ?>
		<?php echo $form->textField($model,'usu_cep'); ?>
		<?php echo $form->error($model,'usu_cep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_data'); ?>
		<?php echo $form->textField($model,'usu_data',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'usu_data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->