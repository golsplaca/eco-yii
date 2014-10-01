<?php
/* @var $this EcoFaturaController */
/* @var $data EcoFatura */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('fat_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->fat_id), array('view', 'id'=>$data->fat_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fat_id_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->fat_id_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fat_object')); ?>:</b>
	<?php echo CHtml::encode($data->fat_object); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fat_endereco')); ?>:</b>
	<?php echo CHtml::encode($data->fat_endereco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fat_status')); ?>:</b>
	<?php echo CHtml::encode($data->fat_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fat_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->fat_codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fat_data')); ?>:</b>
	<?php echo CHtml::encode($data->fat_data); ?>
	<br />


</div>