<?php
/* @var $this CoursetemplateController */
/* @var $model Coursetemplate */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'coursetemplate-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name_full'); ?>
		<?php echo $form->textField($model,'name_full',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name_full'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_short'); ?>
		<?php echo $form->textField($model,'name_short',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name_short'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->