<?php
/* @var $this EcoBannerController */
/* @var $model EcoBanner */

$this->breadcrumbs=array(
	'Eco Banners'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EcoBanner', 'url'=>array('index')),
	array('label'=>'Create EcoBanner', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#eco-banner-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Eco Banners</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'eco-banner-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ba_guid',
		'pro_guid',
		'ba_nome',
		'ba_data',
		'ba_imagem',
		'status',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
