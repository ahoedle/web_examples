<?php
/* @var $this OpeningController */
/* @var $model Opening */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'opening-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'opening_id'); ?>
		<?php echo $form->textField($model,'opening_id'); ?>
		<?php echo $form->error($model,'opening_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weekday'); ?>
		<?php echo $form->textField($model,'weekday'); ?>
		<?php echo $form->error($model,'weekday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'open1'); ?>
		<?php echo $form->textField($model,'open1'); ?>
		<?php echo $form->error($model,'open1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'close1'); ?>
		<?php echo $form->textField($model,'close1'); ?>
		<?php echo $form->error($model,'close1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'open2'); ?>
		<?php echo $form->textField($model,'open2'); ?>
		<?php echo $form->error($model,'open2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'close2'); ?>
		<?php echo $form->textField($model,'close2'); ?>
		<?php echo $form->error($model,'close2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vet_id'); ?>
		<?php echo $form->textField($model,'vet_id'); ?>
		<?php echo $form->error($model,'vet_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->