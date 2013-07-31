<?php
/* @var $this ClassTimeController */
/* @var $model ClassTime */

$this->breadcrumbs=array(
	'Class Times'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ClassTime', 'url'=>array('index')),
	array('label'=>'Create ClassTime', 'url'=>array('create')),
	array('label'=>'View ClassTime', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ClassTime', 'url'=>array('admin')),
);
?>

<h1>Update ClassTime <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>