<?php
/* @var $this VehicleController */
/* @var $data Vehicle */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registration_number')); ?>:</b>
	<?php echo CHtml::encode($data->registration_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chassis_number')); ?>:</b>
	<?php echo CHtml::encode($data->chassis_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_make_id')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_make_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_model_id')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_model_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_colour_id')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_colour_id); ?>
	<br />


</div>