<?php
/* @var $this CoursetemplateController */
/* @var $data Coursetemplate */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('template_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->template_id), array('view', 'id'=>$data->template_id)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('requirement')); ?>:</b>
	<?php echo CHtml::encode($data->requirement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
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

	*/ ?>

</div>