<?php
/* @var $this MasterCourseController */
/* @var $model MasterCourse */

$this->breadcrumbs=array(
	'Master Courses'=>array('index'),
	$model->title=>array('view','id'=>$model->master_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MasterCourse', 'url'=>array('index')),
	array('label'=>'Create MasterCourse', 'url'=>array('create')),
	array('label'=>'View MasterCourse', 'url'=>array('view', 'id'=>$model->master_id)),
	array('label'=>'Manage MasterCourse', 'url'=>array('admin')),
);
?>

<h1>Update MasterCourse <?php echo $model->master_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>