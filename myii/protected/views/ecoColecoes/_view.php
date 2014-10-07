<?php
/* @var $this EcoColecoesController */
/* @var $data EcoColecoes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('col_guid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->col_guid), array('view', 'id'=>$data->col_guid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('col_nome')); ?>:</b>
	<?php echo CHtml::encode($data->col_nome); ?>
	<br />


</div>