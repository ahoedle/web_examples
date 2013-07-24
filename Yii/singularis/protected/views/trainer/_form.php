<?php
/* @var $this TrainerController */
/* @var $model Trainer */
/* @var $form CActiveForm */
?>

</br>

<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'horizontalForm',
	'type'=>'horizontal',
)); ?>
 
<fieldset>
 
<!-- <legend>Legend</legend> -->


<?php echo $form->dropDownListRow($model, 'salutation',
array(' ', 'Herr', 'Frau', 'Firma')); ?>

<?php echo $form->textFieldRow($model, 'title'); ?>

<?php echo $form->textFieldRow($model, 'first_name'); ?>

<?php echo $form->textFieldRow($model, 'last_name'); ?>

<?php echo $form->textFieldRow($model, 'address'); ?>

<?php echo $form->textFieldRow($model, 'postcode'); ?>

<?php echo $form->textFieldRow($model, 'place'); ?>

<?php echo $form->textFieldRow($model, 'tel'); ?>

<?php echo $form->textFieldRow($model, 'mobile'); ?>

<?php echo $form->textFieldRow($model, 'email'); ?>

<?php echo $form->checkBoxRow($model, 'newsletter', array('disabled'=>false)); ?>

<?php echo $form->textFieldRow($model, 'password'); ?>

<?php echo $form->textFieldRow($model, 'info'); ?>

<?php echo $form->textFieldRow($model, 'recorded_by'); ?>

<?php echo $form->textFieldRow($model, 'birthday'); ?>

<?php echo $form->dropDownListRow($model, 'status',
array(' ', 'Trainer', 'Trainer-inaktiv')); ?>

<?php echo $form->textFieldRow($model, 'social_security_nr'); ?>

<?php echo $form->textAreaRow($model, 'subjects', array('class'=>'span8', 'rows'=>5)); ?>

</fieldset>
 
<div class="form-actions">
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Speichern')); ?>
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>
 
<?php $this->endWidget(); ?>