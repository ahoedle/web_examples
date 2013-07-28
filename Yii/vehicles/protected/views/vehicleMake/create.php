<?php
/* @var $this VehicleMakeController */
/* @var $model VehicleMake */

$this->breadcrumbs=array(
	'Vehicle Makes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VehicleMake', 'url'=>array('index')),
	array('label'=>'Manage VehicleMake', 'url'=>array('admin')),
);
?>

<h1>Create VehicleMake</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>