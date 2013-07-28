<?php
/* @var $this VehicleMakeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vehicle Makes',
);

$this->menu=array(
	array('label'=>'Create VehicleMake', 'url'=>array('create')),
	array('label'=>'Manage VehicleMake', 'url'=>array('admin')),
);
?>

<h1>Vehicle Makes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
