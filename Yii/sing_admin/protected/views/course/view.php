<?php
/* @var $this CourseController */
/* @var $model Course */

$this->breadcrumbs=array(
	'Courses'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Course', 'url'=>array('index')),
	array('label'=>'Create Course', 'url'=>array('create')),
	array('label'=>'Update Course', 'url'=>array('update', 'id'=>$model->course_id)),
	array('label'=>'Delete Course', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->course_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Course', 'url'=>array('admin')),
);
?>

<h1>View Course #<?php echo $model->course_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'course_id',
		'course_nr',
		'center',
		'category1',
		'category2',
		'type',
		'title',
		'requirement',
		'content',
		'description',
		'place',
		'start',
		'end',
		'expiry',
		'status',
		'duration',
		'ue',
		'min_participants',
		'max_participants',
		'price',
		'class_time',
		'graduation',
		'statistics',
		'lead_trainer',
		'trainer',
		'master_course_id',
	),
)); ?>

<?php
	echo CHtml::button('Trainer zuweisen', array('submit' => $this->createUrl('course/addTrainer',array('course_id'=>$model->course_id))));
?>