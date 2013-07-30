<?php
/* @var $this ClassTimeController */
/* @var $model ClassTime */

$this->breadcrumbs=array(
	'Class Times'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ClassTime', 'url'=>array('index')),
	array('label'=>'Manage ClassTime', 'url'=>array('admin')),
);
?>

<h1>Create ClassTime</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>