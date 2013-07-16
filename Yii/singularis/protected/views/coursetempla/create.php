<?php
/* @var $this CoursetemplaController */
/* @var $model Coursetempla */

$this->breadcrumbs=array(
	'Coursetemplas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Coursetempla', 'url'=>array('index')),
	array('label'=>'Manage Coursetempla', 'url'=>array('admin')),
);
?>

<h1>Create Coursetempla</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>