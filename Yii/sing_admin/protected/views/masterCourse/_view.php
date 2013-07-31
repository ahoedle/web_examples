<?php
/* @var $this MasterCourseController */
/* @var $data MasterCourse */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('master_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->master_id), array('view', 'id'=>$data->master_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />


</div>