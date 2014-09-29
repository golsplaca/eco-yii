<?php
/* @var $this EcoBannerController */
/* @var $model EcoBanner */

$this->breadcrumbs=array(
	'Eco Banners'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EcoBanner', 'url'=>array('index')),
	array('label'=>'Manage EcoBanner', 'url'=>array('admin')),
);
?>

<h1>Create EcoBanner</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>