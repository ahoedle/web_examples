<?php
/* @var $this VehicleMakeController */
/* @var $model VehicleMake */

$this->breadcrumbs=array(
	'Vehicle Makes'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List VehicleMake', 'url'=>array('index')),
	array('label'=>'Create VehicleMake', 'url'=>array('create')),
	array('label'=>'View VehicleMake', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage VehicleMake', 'url'=>array('admin')),
);
?>

<h1>Update VehicleMake <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>