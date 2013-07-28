<?php
/* @var $this VehicleController */
/* @var $model Vehicle */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'registration_number'); ?>
		<?php echo $form->textField($model,'registration_number',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chassis_number'); ?>
		<?php echo $form->textField($model,'chassis_number',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vehicle_make_id'); ?>
		<?php echo $form->textField($model,'vehicle_make_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vehicle_model_id'); ?>
		<?php echo $form->textField($model,'vehicle_model_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vehicle_colour_id'); ?>
		<?php echo $form->textField($model,'vehicle_colour_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->