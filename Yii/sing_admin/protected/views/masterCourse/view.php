<?php
/* @var $this MasterCourseController */
/* @var $model MasterCourse */

$this->breadcrumbs=array(
	'Master Courses'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List MasterCourse', 'url'=>array('index')),
	array('label'=>'Create MasterCourse', 'url'=>array('create')),
	array('label'=>'Update MasterCourse', 'url'=>array('update', 'id'=>$model->master_id)),
	array('label'=>'Delete MasterCourse', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->master_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MasterCourse', 'url'=>array('admin')),
);
?>

<h1>View MasterCourse #<?php echo $model->master_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'master_id',
		'title',
	),
)); ?>
