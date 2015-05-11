<h3> Não tenho uma conta: </h3>
Cadastre-se é rápido e fácil. <Br /><br />

<div class="form">
  <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'eco-usuario-form',
    'enableAjaxValidation'=>false,
  )); ?>

  <p class="note">Os campos com <span class="required">*</span> são obrigatórios.</p>

  <?php //echo $form->errorSummary($usuario); ?>
  <div class="row">
    <?php echo $form->labelEx($usuario,'usu_nome'); ?>
    <?php echo $form->textField($usuario,'usu_nome',array('size'=>45,'maxlength'=>100, 'placeholder'=>'nome')); ?>
    <?php echo $form->error($usuario,'usu_nome'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($usuario,'usu_email'); ?>
    <?php echo $form->textField($usuario,'usu_email',array('size'=>45,'maxlength'=>100, 'placeholder'=>'email@dominio.com')); ?>
    <?php echo $form->error($usuario,'usu_email'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($usuario,'usu_fonr_cel'); ?>
    <?php echo $form->textField($usuario,'usu_fonr_cel',array('size'=>20,'maxlength'=>50, 'placeholder'=>'(00) 0000-0000  ')); ?>
    <?php echo $form->error($usuario,'usu_fonr_cel'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($usuario,'usu_senha'); ?>
    <?php echo $form->passwordField($usuario,'usu_senha',array('size'=>20,'maxlength'=>50, 'placeholder'=>'senha')); ?>
    <?php echo CHtml::passwordField('usu_senha','',array('size'=>20,'maxlength'=>50, 'placeholder'=>'repita à senha')); ?>
    <?php echo $form->error($usuario,'usu_senha'); ?>
  </div>

  <div class="row buttons">
    <?php echo CHtml::submitButton('Cadastrar-se', array('class' => 'sdfa')); ?>
  </div>
  <?php $this->endWidget(); ?>
</div><!-- form -->