<?php
/* @var $this VehicleColourController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vehicle Colours',
);

$this->menu=array(
	array('label'=>'Create VehicleColour', 'url'=>array('create')),
	array('label'=>'Manage VehicleColour', 'url'=>array('admin')),
);
?>

<h1>Vehicle Colours</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
