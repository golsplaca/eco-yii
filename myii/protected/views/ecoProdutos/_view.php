<?php
/* @var $this EcoProdutosController */
/* @var $data EcoProdutos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pro_id), array('view', 'id'=>$data->pro_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_id_cagegoria')); ?>:</b>
	<?php echo CHtml::encode($data->pro_id_cagegoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->pro_codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_nome')); ?>:</b>
	<?php echo CHtml::encode($data->pro_nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_descricao')); ?>:</b>
	<?php echo CHtml::encode($data->pro_descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_preco_de')); ?>:</b>
	<?php echo CHtml::encode($data->pro_preco_de); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_preco_por')); ?>:</b>
	<?php echo CHtml::encode($data->pro_preco_por); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_data')); ?>:</b>
	<?php echo CHtml::encode($data->pro_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_tamanho')); ?>:</b>
	<?php echo CHtml::encode($data->pro_tamanho); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_status')); ?>:</b>
	<?php echo CHtml::encode($data->pro_status); ?>
	<br />

	*/ ?>

</div>