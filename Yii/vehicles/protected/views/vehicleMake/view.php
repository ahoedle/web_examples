<?php
/* @var $this VehicleMakeController */
/* @var $model VehicleMake */

$this->breadcrumbs=array(
	'Vehicle Makes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List VehicleMake', 'url'=>array('index')),
	array('label'=>'Create VehicleMake', 'url'=>array('create')),
	array('label'=>'Update VehicleMake', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete VehicleMake', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VehicleMake', 'url'=>array('admin')),
);
?>

<h1>View VehicleMake #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'dvla_code',
		'name',
	),
)); ?>
