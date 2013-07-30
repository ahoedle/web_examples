<?php
/* @var $this CentralController */
/* @var $model Central */

$this->breadcrumbs=array(
	'Centrals'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Central', 'url'=>array('index')),
	array('label'=>'Create Central', 'url'=>array('create')),
	array('label'=>'Update Central', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Central', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Central', 'url'=>array('admin')),
);
?>

<h1>View Central #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
