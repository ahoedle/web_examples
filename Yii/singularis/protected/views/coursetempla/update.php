<?php
/* @var $this CoursetemplaController */
/* @var $model Coursetempla */

$this->breadcrumbs=array(
	'Coursetemplas'=>array('index'),
	$model->template_id=>array('view','id'=>$model->template_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Coursetempla', 'url'=>array('index')),
	array('label'=>'Create Coursetempla', 'url'=>array('create')),
	array('label'=>'View Coursetempla', 'url'=>array('view', 'id'=>$model->template_id)),
	array('label'=>'Manage Coursetempla', 'url'=>array('admin')),
);
?>

<h1>Update Coursetempla <?php echo $model->template_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>