<?php
/* @var $this VehicleColourController */
/* @var $model VehicleColour */

$this->breadcrumbs=array(
	'Vehicle Colours'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VehicleColour', 'url'=>array('index')),
	array('label'=>'Manage VehicleColour', 'url'=>array('admin')),
);
?>

<h1>Create VehicleColour</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>