<?php
/* @var $this CourseController */
/* @var $model Course */

/*
$this->breadcrumbs=array(
	'Courses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Course', 'url'=>array('index')),
	array('label'=>'Manage Course', 'url'=>array('admin')),
);
*/
?>

<?php

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Kurse'=>'#', 'Erstellen'),
));

?>

<!-- </br> -->
<!-- <h1>Create Course</h1> -->

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>