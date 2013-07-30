<?php
/* @var $this CourseController */
/* @var $data Course */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('course_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->course_id), array('view', 'id'=>$data->course_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('course_nr')); ?>:</b>
	<?php echo CHtml::encode($data->course_nr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('center')); ?>:</b>
	<?php echo CHtml::encode($data->center); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category1')); ?>:</b>
	<?php echo CHtml::encode($data->category1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category2')); ?>:</b>
	<?php echo CHtml::encode($data->category2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('requirement')); ?>:</b>
	<?php echo CHtml::encode($data->requirement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place')); ?>:</b>
	<?php echo CHtml::encode($data->place); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start')); ?>:</b>
	<?php echo CHtml::encode($data->start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end')); ?>:</b>
	<?php echo CHtml::encode($data->end); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expiry')); ?>:</b>
	<?php echo CHtml::encode($data->expiry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duration')); ?>:</b>
	<?php echo CHtml::encode($data->duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ue')); ?>:</b>
	<?php echo CHtml::encode($data->ue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_participants')); ?>:</b>
	<?php echo CHtml::encode($data->min_participants); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_participants')); ?>:</b>
	<?php echo CHtml::encode($data->max_participants); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('class_time')); ?>:</b>
	<?php echo CHtml::encode($data->class_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('graduation')); ?>:</b>
	<?php echo CHtml::encode($data->graduation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statistics')); ?>:</b>
	<?php echo CHtml::encode($data->statistics); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trainer')); ?>:</b>
	<?php echo CHtml::encode($data->trainer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('master_course_id')); ?>:</b>
	<?php echo CHtml::encode($data->master_course_id); ?>
	<br />

	*/ ?>

</div>