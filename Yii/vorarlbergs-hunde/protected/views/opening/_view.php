<?php
/* @var $this OpeningController */
/* @var $data Opening */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('opening_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->opening_id), array('view', 'id'=>$data->opening_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weekday')); ?>:</b>
	<?php echo CHtml::encode($data->weekday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('open1')); ?>:</b>
	<?php echo CHtml::encode($data->open1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('close1')); ?>:</b>
	<?php echo CHtml::encode($data->close1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('open2')); ?>:</b>
	<?php echo CHtml::encode($data->open2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('close2')); ?>:</b>
	<?php echo CHtml::encode($data->close2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vet_id')); ?>:</b>
	<?php echo CHtml::encode($data->vet_id); ?>
	<br />


</div>