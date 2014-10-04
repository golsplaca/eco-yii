<?php
/* @var $this EcoProdutosController */
/* @var $model EcoProdutos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'eco-produtos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data')
)); 
	Yii::app()->clientScript->registerCoreScript('jquery');
	Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/js/frameworks/jquery.price_format.2.0.js');

	echo "<script>
			$(document).ready(function() {
				$('#EcoProdutos_pro_preco_de, #EcoProdutos_pro_preco_por').priceFormat({
				    prefix: 'R$ ',
				    centsSeparator: ',',
				    thousandsSeparator: '.'
				});
		});</script>";
?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_id_cagegoria'); ?>
		<?php echo $form->dropDownList($model,'pro_id_cagegoria', 
		CHtml::listData(EcoCategoria::model()->findAll(array('order' => 'cat_nome')), 'cat_id', 'cat_nome')); ?>
		<?php echo $form->error($model,'pro_id_cagegoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_id_colecao'); ?>
		<?php echo $form->dropDownList($model,'pro_id_colecao', 
		CHtml::listData(EcoColecoes::model()->findAll(), 'col_guid', 'col_nome')); ?>
		<?php echo $form->error($model,'pro_id_colecao'); ?>
	</div>

	<div class="row" style="display:none;">   
		<?php echo $form->labelEx($model,'pro_codigo'); ?>
		<?php echo $form->textField($model,'pro_codigo', array('value' => rand(10, 10000))); ?>
		<?php echo $form->error($model,'pro_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_nome'); ?>
		<?php echo $form->textField($model,'pro_nome',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'pro_nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_descricao'); ?>
		<?php echo $form->textArea($model,'pro_descricao',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pro_descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_preco_de'); ?>
		<?php echo $form->textField($model,'pro_preco_de',array('size'=>10,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'pro_preco_de'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_preco_por'); ?>
		<?php echo $form->textField($model,'pro_preco_por',array('size'=>10,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'pro_preco_por'); ?>
	</div>

	<div class="row" style="display:none;">
		<?php echo $form->labelEx($model,'pro_data'); ?>
		<?php echo $form->textField($model,'pro_data', array('value' => date("Y-m-d"))); ?>
		<?php echo $form->error($model,'pro_data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_tamanho'); ?>
		<?php echo $form->textField($model,'pro_tamanho',array('size'=>30,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'pro_tamanho'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_status'); ?>
 		<?php echo $form->dropDownList($model, 'pro_status', array('1'=>'ativo', '0' => 'inativo')); ?>
		<?php echo $form->error($model,'pro_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_img_1'); ?>
        <?php echo CHtml::activeFileField($model, 'pro_img_1'); ?>
		<?php echo $form->error($model,'pro_img_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_img_2'); ?>
        <?php echo CHtml::activeFileField($model, 'pro_img_2'); ?>
		<?php echo $form->error($model,'pro_img_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_img_3'); ?>
        <?php echo CHtml::activeFileField($model, 'pro_img_3'); ?>
		<?php echo $form->error($model,'pro_img_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_img_4'); ?>
        <?php echo CHtml::activeFileField($model, 'pro_img_4'); ?>
		<?php echo $form->error($model,'pro_img_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_img_5'); ?>
        <?php echo CHtml::activeFileField($model, 'pro_img_5'); ?>
		<?php echo $form->error($model,'pro_img_5'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'pro_qd'); ?>
		<?php echo $form->textField($model,'pro_qd',array('size'=>30,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'pro_qd'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->