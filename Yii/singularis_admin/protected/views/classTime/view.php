<?php
/* @var $this ClassTimeController */
/* @var $model ClassTime */

$this->breadcrumbs=array(
	'Class Times'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ClassTime', 'url'=>array('index')),
	array('label'=>'Create ClassTime', 'url'=>array('create')),
	array('label'=>'Update ClassTime', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ClassTime', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ClassTime', 'url'=>array('admin')),
);
?>

<h1>View ClassTime #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
