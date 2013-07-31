<?php
/* @var $this MasterCourseController */
/* @var $model MasterCourse */

$this->breadcrumbs=array(
	'Master Courses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MasterCourse', 'url'=>array('index')),
	array('label'=>'Manage MasterCourse', 'url'=>array('admin')),
);
?>

<h1>Create MasterCourse</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>