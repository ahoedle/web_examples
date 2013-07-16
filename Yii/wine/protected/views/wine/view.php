<?php
/* @var $this WineController */
/* @var $model Wine */

$this->breadcrumbs=array(
	'Wines'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Wine', 'url'=>array('index')),
	array('label'=>'Create Wine', 'url'=>array('create')),
	array('label'=>'Update Wine', 'url'=>array('update', 'id'=>$model->wine_id)),
	array('label'=>'Delete Wine', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->wine_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Wine', 'url'=>array('admin')),
);
?>

<h1>View Wine #<?php echo $model->wine_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'wine_id',
		'name',
		'manufacturer',
		'location',
		'country',
		'vintage',
		'description',
		'price',
		'stock',
		'order_id',
	),
)); ?>
