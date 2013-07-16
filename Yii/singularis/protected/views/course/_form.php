<?php
/* @var $this CourseController */
/* @var $model Course */
/* @var $form CActiveForm */
?>

<div class="form">


    <?php /** @var BootActiveForm $form */
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	    'id'=>'horizontalForm',
	    'type'=>'horizontal',
	)); ?>
	     
	<fieldset>
	     
	    <legend>Kurs anlegen:</legend>
	     
	    <?php echo $form->textFieldRow($model, 'name_full');//, array('hint'=>'In addition to freeform text, any HTML5 text-based input appears like so.')); ?>
	    <?php echo $form->textFieldRow($model, 'name_short'); ?>
	    
		<?php echo $form->dateRangeRow($model, 'start',
				array(
				//'prepend'=>'<i class="icon-calendar"></i>',
				'options' => array('callback'=>'js:function(start, end){console.log(start.toString("MMMM d, yyyy") + " - " + end.toString("MMMM d, yyyy"));}') // TODO
		)); ?>
		
<!--
		 <?php echo $form->select2Row($model, 'place', array('asDropDownList' => false, 'options' => array(
			'tags' => array('Dornbirn','Hohenems', 'Nenzing'),
			//'placeholder' => 'type clever, or is, or just type!',
			'width' => '100%',
			'tokenSeparators' => array(',', ' ')
		)));?>
-->
		
		<?php echo $form->textAreaRow($model, 'description', array('class'=>'span8', 'rows'=>5)); ?>

	     
	</fieldset>
	     
    <div class="form-actions">
    	<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>

    </div>
     
    <?php $this->endWidget(); ?>


<!--
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'course-form',
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
		<?php echo $form->labelEx($model,'start'); ?>
		<?php echo $form->textField($model,'start'); ?>
		<?php echo $form->error($model,'start'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end'); ?>
		<?php echo $form->textField($model,'end'); ?>
		<?php echo $form->error($model,'end'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place'); ?>
		<?php echo $form->textField($model,'place',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'place'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visible'); ?>
		<?php echo $form->textField($model,'visible'); ?>
		<?php echo $form->error($model,'visible'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
-->

</div><!-- form -->