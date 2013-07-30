<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'internal_nr'); ?>
		<?php echo $form->textField($model,'internal_nr',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'internal_nr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'course_id'); ?>
		<?php echo $form->textField($model,'course_id'); ?>
		<?php echo $form->error($model,'course_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salutation'); ?>
		<?php echo $form->textField($model,'salutation',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'salutation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postcode'); ?>
		<?php echo $form->textField($model,'postcode',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'postcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place'); ?>
		<?php echo $form->textField($model,'place',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'place'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel'); ?>
		<?php echo $form->textField($model,'tel',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'newsletter'); ?>
		<?php echo $form->textField($model,'newsletter',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'newsletter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'educational_partner'); ?>
		<?php echo $form->textField($model,'educational_partner',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'educational_partner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'info'); ?>
		<?php echo $form->textField($model,'info',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recorded_by'); ?>
		<?php echo $form->textField($model,'recorded_by',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'recorded_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthday'); ?>
		<?php echo $form->textField($model,'birthday',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'birthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'social_security_nr'); ?>
		<?php echo $form->textField($model,'social_security_nr',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'social_security_nr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'advisor1'); ?>
		<?php echo $form->textField($model,'advisor1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'advisor1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'advisor2'); ?>
		<?php echo $form->textField($model,'advisor2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'advisor2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'advisor_email'); ?>
		<?php echo $form->textField($model,'advisor_email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'advisor_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ams_district'); ?>
		<?php echo $form->textField($model,'ams_district',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ams_district'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->