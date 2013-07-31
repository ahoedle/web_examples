<?php
/* @var $this MasterCourseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Master Courses',
);

$this->menu=array(
	array('label'=>'Create MasterCourse', 'url'=>array('create')),
	array('label'=>'Manage MasterCourse', 'url'=>array('admin')),
);
?>

<h1>Master Courses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
