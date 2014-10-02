<?php
/* @var $this EcoUsuarioController */
/* @var $data EcoUsuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->usu_id), array('view', 'id'=>$data->usu_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_nivel')); ?>:</b>
	<?php echo CHtml::encode($data->usu_nivel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_login')); ?>:</b>
	<?php echo CHtml::encode($data->usu_login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_senha')); ?>:</b>
	<?php echo CHtml::encode($data->usu_senha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_nome')); ?>:</b>
	<?php echo CHtml::encode($data->usu_nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_email')); ?>:</b>
	<?php echo CHtml::encode($data->usu_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_fone')); ?>:</b>
	<?php echo CHtml::encode($data->usu_fone); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_nascimento')); ?>:</b>
	<?php echo CHtml::encode($data->usu_nascimento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_cpf')); ?>:</b>
	<?php echo CHtml::encode($data->usu_cpf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_rg')); ?>:</b>
	<?php echo CHtml::encode($data->usu_rg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_endereco')); ?>:</b>
	<?php echo CHtml::encode($data->usu_endereco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_estado')); ?>:</b>
	<?php echo CHtml::encode($data->usu_estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_cidade')); ?>:</b>
	<?php echo CHtml::encode($data->usu_cidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_numero')); ?>:</b>
	<?php echo CHtml::encode($data->usu_numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_fonr_cel')); ?>:</b>
	<?php echo CHtml::encode($data->usu_fonr_cel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_cep')); ?>:</b>
	<?php echo CHtml::encode($data->usu_cep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_data')); ?>:</b>
	<?php echo CHtml::encode($data->usu_data); ?>
	<br />

	*/ ?>

</div>