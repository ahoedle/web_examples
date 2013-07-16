<?php
/* @var $this PageController */
/* @var $model Page */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'verticalForm',
    'htmlOptions'=>array('class'=>'well'),
)); ?>
 
<?php echo $form->textAreaRow($model, 'title', array('class'=>'span8', 'rows'=>1)); ?>
<?php echo $form->html5EditorRow($model, 'content', array('class'=>'span4', 'rows'=>20, 'height'=>'200', 'options'=>array('color'=>true))); ?>

<br/>
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Create')); ?>
 
<?php $this->endWidget(); ?>
<p class="note">Fields with <span class="required">*</span> are required.</p>

</div><!-- form -->
