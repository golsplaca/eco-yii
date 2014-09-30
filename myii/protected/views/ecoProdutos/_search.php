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
		<?php echo $form->textField($model,'pro_preco_de',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_preco_por'); ?>
		<?php echo $form->textField($model,'pro_preco_por',array('size'=>20,'maxlength'=>20)); ?>
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

	<div class="row">
		<?php echo $form->label($model,'pro_img_1'); ?>
		<?php echo $form->textField($model,'pro_img_1',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_img_2'); ?>
		<?php echo $form->textField($model,'pro_img_2',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_img_3'); ?>
		<?php echo $form->textField($model,'pro_img_3',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_img_4'); ?>
		<?php echo $form->textField($model,'pro_img_4',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_img_5'); ?>
		<?php echo $form->textField($model,'pro_img_5',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->