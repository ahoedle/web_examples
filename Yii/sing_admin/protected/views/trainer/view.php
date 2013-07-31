<?php
/* @var $this TrainerController */
/* @var $model Trainer */

$this->breadcrumbs=array(
	'Trainers'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Trainer', 'url'=>array('index')),
	array('label'=>'Create Trainer', 'url'=>array('create')),
	array('label'=>'Update Trainer', 'url'=>array('update', 'id'=>$model->trainer_id)),
	array('label'=>'Delete Trainer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->trainer_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Trainer', 'url'=>array('admin')),
);
?>

<h1>View Trainer #<?php echo $model->trainer_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'trainer_id',
		'password',
		'salutation',
		'title',
		'first_name',
		'last_name',
		'address',
		'postcode',
		'place',
		'tel',
		'mobile',
		'email',
		'newsletter',
		'info',
		'recorded_by',
		'birthday',
		'status',
		'social_security_nr',
		'subjects',
	),
)); ?>
