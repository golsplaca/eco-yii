<?php
/* @var $this EcoProdutosController */
/* @var $model EcoProdutos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pro_id'); ?>
		<?php echo $form->textField($model,'pro_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_id_cagegoria'); ?>
		<?php echo $form->textField($model,'pro_id_cagegoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_codigo'); ?>
		<?php echo $form->textField($model,'pro_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_nome'); ?>
		<?php echo $form->textField($model,'pro_nome',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_descricao'); ?>
		<?php echo $form->textField($model,'pro_descricao',array('size'=>60,'maxlength'=>400)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_preco_de'); ?>
		<?php echo $form->textField($model,'pro_preco_de',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_preco_por'); ?>
		<?php echo $form->textField($model,'pro_preco_por',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_data'); ?>
		<?php echo $form->textField($model,'pro_data'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_tamanho'); ?>
		<?php echo $form->textField($model,'pro_tamanho',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_status'); ?>
		<?php echo $form->textField($model,'pro_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->