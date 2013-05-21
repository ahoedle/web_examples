<?php
/* @var $this PageController */
/* @var $data Page */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
<!-- 	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?> -->
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('live')); ?>:</b>
	<?php echo CHtml::encode($data->live); ?>
	<br /></br>

<!-- 	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b> -->
	<b><?php echo CHtml::encode($data->title); ?></b>
<!-- 	<?php echo CHtml::link(CHtml::encode($data->title), array('view', 'title'=>$data->title)); ?> -->
<!-- 	<?php echo CHtml::encode($data->title); ?> -->
	<br /></br>

<!-- 	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b></br> -->
	<?php echo CHtml::encode($data->getPreview()); ?></br>
	<?php echo CHtml::link(CHtml::encode('Weiterlesen'), array('view', 'id'=>$data->id)); ?>
	<br /></br>

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_updated')); ?>:</b>
	<?php echo CHtml::encode($data->date_updated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_published')); ?>:</b>
	<?php echo CHtml::encode($data->date_published); ?>
	<br />


</div>