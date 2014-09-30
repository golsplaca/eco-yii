<?php
/* @var $this EcoCategoriaController */
/* @var $data EcoCategoria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cat_id), array('view', 'id'=>$data->cat_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_nome')); ?>:</b>
	<?php echo CHtml::encode($data->cat_nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_data')); ?>:</b>
	<?php echo CHtml::encode($data->cat_data); ?>
	<br />


</div>