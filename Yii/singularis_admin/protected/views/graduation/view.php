<?php
/* @var $this GraduationController */
/* @var $model Graduation */

$this->breadcrumbs=array(
	'Graduations'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Graduation', 'url'=>array('index')),
	array('label'=>'Create Graduation', 'url'=>array('create')),
	array('label'=>'Update Graduation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Graduation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Graduation', 'url'=>array('admin')),
);
?>

<h1>View Graduation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
