<?php
/* @var $this CourseController */
/* @var $model Course */
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

<?php echo $form->textFieldRow($model, 'course_nr'); ?>

<?php echo $form->dropDownListRow($model, 'center',
array(' ', 'Dornbirn', 'Hohenems', 'Nenzing')); ?>

<?php echo $form->dropDownListRow($model, 'category1',
array(' ', 'Aktiv 10+', 'Aktiv 50+', 'Berufliche Weiterbildung', 'Berufskraftfahrer', 'Buchhaltung', 'Büro', 'Computerkurse', 'ECDL', 'ECDL Prüfungen', 'Erwachsenenbildung', 'Intensivunterricht', 'Lehrabschluss', 'Nachhilfe', 'Sprachen')); ?>

<?php echo $form->dropDownListRow($model, 'category2',
array(' ', 'Aktiv 10+', 'Aktiv 50+', 'Berufliche Weiterbildung', 'Berufskraftfahrer', 'Buchhaltung', 'Büro', 'Computerkurse', 'ECDL', 'ECDL Prüfungen', 'Erwachsenenbildung', 'Intensivunterricht', 'Lehrabschluss', 'Nachhilfe', 'Sprachen')); ?>

<?php echo $form->dropDownListRow($model, 'type',
array(' ', 'Intensivunterricht', 'Kurs', 'Lehrgang', 'Lernbegleitung', 'Nachhilfe', 'Prüfung', 'Raumvermietung', 'Seminar')); ?>
 
<?php echo $form->textFieldRow($model, 'name_full'); ?>

<?php echo $form->textAreaRow($model, 'requirement', array('class'=>'span8', 'rows'=>5)); ?>

<?php echo $form->textAreaRow($model, 'content', array('class'=>'span8', 'rows'=>5)); ?>

<?php echo $form->textAreaRow($model, 'description', array('class'=>'span8', 'rows'=>5)); ?>

<?php echo $form->textFieldRow($model, 'place'); ?>

<?php echo $form->datepickerRow($model, 'start',
array('prepend'=>'<i class="icon-calendar"></i>')); ?>

<?php echo $form->dropDownListRow($model, 'status',
array(' ', '------------', 'abgesagt', 'interner Kurs')); ?>

<?php echo $form->datepickerRow($model, 'end',
array('prepend'=>'<i class="icon-calendar"></i>')); ?>

<?php echo $form->datepickerRow($model, 'expiry',
array('prepend'=>'<i class="icon-calendar"></i>')); ?>

<?php echo $form->textFieldRow($model, 'duration'); ?>

<?php echo $form->textFieldRow($model, 'ue'); ?>

<?php echo 'Leiter </br>'; ?>

<?php echo 'Trainer </br>'; ?>

<?php echo $form->textFieldRow($model, 'min_participants'); ?>

<?php echo $form->textFieldRow($model, 'max_participants'); ?>

<?php echo $form->textFieldRow($model, 'price'); ?>

<?php echo $form->dropDownListRow($model, 'class_time',
array(' ', 'A, Abendkurs', 'V, Vormittagskurs', 'N, Nachmittagskurs', 'W, Wochenendkurs', 'T, Tageskurs', 'S, Sonstiges')); ?>

<?php echo $form->dropDownListRow($model, 'graduation',
array(' ', 'Prüfung', 'Zertifikat', 'Teilnahmebestätigung')); ?>

<?php echo $form->dropDownListRow($model, 'statistics',
array(' ', 'ja', 'nein', 'neutral')); ?>

<?php echo $form->textFieldRow($model, 'invoice'); ?>

<?php echo $form->textFieldRow($model, 'link'); ?>

</fieldset>
 
<div class="form-actions">
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Speichern')); ?>
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>
 
<?php $this->endWidget(); ?>