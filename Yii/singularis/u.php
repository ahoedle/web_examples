









<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'course-form',
	'enableAjaxValidation'=>false,
)); ?>

<!-- 	<p class="note">Fields with <span class="required">*</span> are required.</p> -->

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name_full'); ?>
		<?php echo $form->textField($model,'name_full',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name_full'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start'); ?>
		<?php echo $form->textField($model,'start',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'start'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end'); ?>
		<?php echo $form->textField($model,'end',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'end'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place'); ?>
		<?php echo $form->textField($model,'place',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'place'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('size'=>60,'maxlength'=>500, 'rows'=> 10, 'cols'=>100)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'course_nr'); ?>
		<?php echo $form->textField($model,'course_nr',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'course_nr'); ?>
	</div>

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
		<?php echo $form->labelEx($model,'requirement'); ?>
		<?php echo $form->textArea($model,'requirement',array('size'=>100,'maxlength'=>1000, 'rows'=> 6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'requirement'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('size'=>60,'maxlength'=>1000, 'rows'=> 10, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'center'); ?>
		<?php echo $form->textField($model,'center',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'center'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expiry'); ?>
		<?php echo $form->textField($model,'expiry',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'expiry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duration'); ?>
		<?php echo $form->textField($model,'duration',array('size'=>100,'maxlength'=>100)); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'invoice'); ?>
		<?php echo $form->textField($model,'invoice',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'invoice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'link'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->