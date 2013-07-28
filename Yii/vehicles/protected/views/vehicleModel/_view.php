<?php
/* @var $this VehicleModelController */
/* @var $data VehicleModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dvla_code')); ?>:</b>
	<?php echo CHtml::encode($data->dvla_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_make_id')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_make_id); ?>
	<br />


</div>