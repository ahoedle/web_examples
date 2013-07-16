<?php
/* @var $this CoursetemplaController */
/* @var $data Coursetempla */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('template_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->template_id), array('view', 'id'=>$data->template_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_full')); ?>:</b>
	<?php echo CHtml::encode($data->name_full); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_short')); ?>:</b>
	<?php echo CHtml::encode($data->name_short); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>