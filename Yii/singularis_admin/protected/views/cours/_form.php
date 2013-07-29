<?php
/* @var $this CoursController */
/* @var $model Cours */
/* @var $form CActiveForm */
?>

<?php /** @var BootActiveForm $form */
	$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id'=>'horizontalForm',
		'type'=>'horizontal',
	)); ?>
 
    <fieldset>
 
        <legend>Legend</legend>
 

        <?php echo $form->dateRangeRow($model, 'start', array(
        	'hint'=>'Nice bootstrap time picker', 
/* 	        'prepend'=>'<i class="icon-calendar">>/i>', */
	        'options' => array('callback'=>'js:function(start, end){console.log(start.toString("MMMM d, yyyy") + " - " + end.toString("MMMM d, yyyy"));}')
        )); ?>
        
		<?php echo $form->timepickerRow($model, 'end', array('hint'=>'Nice bootstrap time picker', 'append'=>'<i class="icon-time" style="cursor:pointer"></i>'));?>
 
    </fieldset>
 
    <div class="form-actions">
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
    </div>
 
<?php $this->endWidget(); ?>

