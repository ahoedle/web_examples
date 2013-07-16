<?php
/* @var $this CoursetemplaController */
/* @var $model Coursetempla */

$this->breadcrumbs=array(
	'Coursetemplas'=>array('index'),
	$model->template_id,
);

$this->menu=array(
	array('label'=>'List Coursetempla', 'url'=>array('index')),
	array('label'=>'Create Coursetempla', 'url'=>array('create')),
	array('label'=>'Update Coursetempla', 'url'=>array('update', 'id'=>$model->template_id)),
	array('label'=>'Delete Coursetempla', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->template_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Coursetempla', 'url'=>array('admin')),
);
?>

<h1>View Coursetempla #<?php echo $model->template_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'template_id',
		'name_full',
		'name_short',
		'description',
	),
)); ?>
