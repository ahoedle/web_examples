<?php
/* @var $this TrainerController */
/* @var $model Trainer */

$this->breadcrumbs=array(
	'Trainers'=>array('index'),
	$model->title=>array('view','id'=>$model->trainer_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Trainer', 'url'=>array('index')),
	array('label'=>'Create Trainer', 'url'=>array('create')),
	array('label'=>'View Trainer', 'url'=>array('view', 'id'=>$model->trainer_id)),
	array('label'=>'Manage Trainer', 'url'=>array('admin')),
);
?>

<h1>Update Trainer <?php echo $model->trainer_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>