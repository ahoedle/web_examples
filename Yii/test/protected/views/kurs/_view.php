<?php
/* @var $this KursController */
/* @var $data Kurs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ort_dropdown')); ?>:</b>
	<?php echo CHtml::encode($data->ort_dropdown); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ort')); ?>:</b>
	<?php echo CHtml::encode($data->ort); ?>
	<br />


</div>