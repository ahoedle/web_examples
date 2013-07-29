<?php
/* @var $this TrainerController */
/* @var $model Trainer */

$this->breadcrumbs=array(
	'Trainers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Trainer', 'url'=>array('index')),
	array('label'=>'Manage Trainer', 'url'=>array('admin')),
);
?>

<h1>Create Trainer</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>