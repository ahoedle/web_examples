<?php
/* @var $this CoursController */
/* @var $model Cours */

$this->breadcrumbs=array(
	'Cours'=>array('index'),
	$model->course_id,
);

$this->menu=array(
	array('label'=>'List Cours', 'url'=>array('index')),
	array('label'=>'Create Cours', 'url'=>array('create')),
	array('label'=>'Update Cours', 'url'=>array('update', 'id'=>$model->course_id)),
	array('label'=>'Delete Cours', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->course_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cours', 'url'=>array('admin')),
);
?>

<h1>View Cours #<?php echo $model->course_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'course_id',
		'name_full',
		'start',
		'end',
		'place',
		'description',
		'visible',
		'course_nr',
		'category1',
		'category2',
		'type',
		'requirement',
		'content',
		'center',
		'status',
		'expiry',
		'duration',
		'ue',
		'min_participants',
		'max_participants',
		'price',
		'class_time',
		'graduation',
		'statistics',
		'invoice',
		'link',
		'lead_trainer',
		'trainer',
	),
)); ?>
