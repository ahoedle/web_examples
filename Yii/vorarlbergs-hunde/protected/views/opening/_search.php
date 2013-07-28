<?php
/* @var $this OpeningController */
/* @var $model Opening */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'opening_id'); ?>
		<?php echo $form->textField($model,'opening_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'weekday'); ?>
		<?php echo $form->textField($model,'weekday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'open1'); ?>
		<?php echo $form->textField($model,'open1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'close1'); ?>
		<?php echo $form->textField($model,'close1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'open2'); ?>
		<?php echo $form->textField($model,'open2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'close2'); ?>
		<?php echo $form->textField($model,'close2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vet_id'); ?>
		<?php echo $form->textField($model,'vet_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->