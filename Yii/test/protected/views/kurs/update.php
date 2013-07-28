<?php
/* @var $this KursController */
/* @var $model Kurs */

$this->breadcrumbs=array(
	'Kurs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kurs', 'url'=>array('index')),
	array('label'=>'Create Kurs', 'url'=>array('create')),
	array('label'=>'View Kurs', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Kurs', 'url'=>array('admin')),
);
?>

<h1>Update Kurs <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>