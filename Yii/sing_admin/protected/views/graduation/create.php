<?php
/* @var $this GraduationController */
/* @var $model Graduation */

$this->breadcrumbs=array(
	'Graduations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Graduation', 'url'=>array('index')),
	array('label'=>'Manage Graduation', 'url'=>array('admin')),
);
?>

<h1>Create Graduation</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>