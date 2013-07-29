<?php
/* @var $this CoursController */
/* @var $model Cours */

$this->breadcrumbs=array(
	'Cours'=>array('index'),
	$model->course_id=>array('view','id'=>$model->course_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cours', 'url'=>array('index')),
	array('label'=>'Create Cours', 'url'=>array('create')),
	array('label'=>'View Cours', 'url'=>array('view', 'id'=>$model->course_id)),
	array('label'=>'Manage Cours', 'url'=>array('admin')),
);
?>

<h1>Update Cours <?php echo $model->course_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>