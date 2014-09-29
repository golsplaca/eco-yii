<?php
/* @var $this EcoBannerController */
/* @var $data EcoBanner */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ba_guid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ba_guid), array('view', 'id'=>$data->ba_guid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_guid')); ?>:</b>
	<?php echo CHtml::encode($data->pro_guid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ba_nome')); ?>:</b>
	<?php echo CHtml::encode($data->ba_nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ba_data')); ?>:</b>
	<?php echo CHtml::encode($data->ba_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ba_imagem')); ?>:</b>
	<?php echo CHtml::encode($data->ba_imagem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>