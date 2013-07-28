<?php
/* @var $this VehicleColourController */
/* @var $model VehicleColour */

$this->breadcrumbs=array(
	'Vehicle Colours'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List VehicleColour', 'url'=>array('index')),
	array('label'=>'Create VehicleColour', 'url'=>array('create')),
	array('label'=>'View VehicleColour', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage VehicleColour', 'url'=>array('admin')),
);
?>

<h1>Update VehicleColour <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>