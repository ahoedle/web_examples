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
		<?php echo $form->labelEx($model,'category1'); ?>
		<?php echo $form->textField($model,'category1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'category1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category2'); ?>
		<?php echo $form->textField($model,'category2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'category2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requirement'); ?>
		<?php echo $form->textArea($model,'requirement',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'requirement'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duration'); ?>
		<?php echo $form->textField($model,'duration',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ue'); ?>
		<?php echo $form->textField($model,'ue',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'min_participants'); ?>
		<?php echo $form->textField($model,'min_participants'); ?>
		<?php echo $form->error($model,'min_participants'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'max_participants'); ?>
		<?php echo $form->textField($model,'max_participants'); ?>
		<?php echo $form->error($model,'max_participants'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'class_time'); ?>
		<?php echo $form->textField($model,'class_time',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'class_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'graduation'); ?>
		<?php echo $form->textField($model,'graduation',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'graduation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statistics'); ?>
		<?php echo $form->textField($model,'statistics',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'statistics'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->