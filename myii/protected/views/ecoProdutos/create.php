<?php
/* @var $this EcoProdutosController */
/* @var $model EcoProdutos */

$this->breadcrumbs=array(
	'Produtos'=>array('index'),
	'criar',
);

$this->menu=array(
	array('label'=>'Listar Produtos', 'url'=>array('index')),
	array('label'=>'Administrar Produtos', 'url'=>array('admin')),
);
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/protected/views/ecoUsuario/css/style.css" />
<h1>Cadastrar Produto</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>