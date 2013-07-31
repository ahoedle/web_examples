<?php
/* @var $this GraduationController */
/* @var $model Graduation */

$this->breadcrumbs=array(
	'Graduations'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Graduation', 'url'=>array('index')),
	array('label'=>'Create Graduation', 'url'=>array('create')),
	array('label'=>'View Graduation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Graduation', 'url'=>array('admin')),
);
?>

<h1>Update Graduation <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>