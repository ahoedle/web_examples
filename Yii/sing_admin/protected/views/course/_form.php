<?php
/* @var $this CourseController */
/* @var $model Course */
/* @var $form CActiveForm */
?>

		<?php
		$this->widget('bootstrap.widgets.TbTabs', array(
			'type'=>'tabs', // 'tabs' or 'pills'
			'tabs'=>array(
				array('label'=>'NEU', 'url'=>$this->createUrl('course/create'), 'active'=>true),
				array('label'=>'NEU aus Vorlage', 'url'=>$this->createUrl('course/create')), //TODO
			),
		));
		?>


<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'horizontalForm',
	'type'=>'horizontal',
)); ?>
     
<fieldset>
     
     <?php 
     	$centrals = $this->modelToArray(Central::model()->findAll());
	    $categories = $this->modelToArray(Category::model()->findAll()); 
	    $types = $this->modelToArray(Type::model()->findAll());
	    $status = $this->modelToArray(Status::model()->findAll());
	    $class_time = $this->modelToArray(ClassTime::model()->findAll());
	    $graduation = $this->modelToArray(Graduation::model()->findAll());
	    $t = $this->getTrainer();
	    asort($t);
	    $trainer = array(0 => "") + $t;
     ?>
     
    <?php echo $form->textFieldRow($model, 'course_id'); ?>
     
    <?php echo $form->textFieldRow($model, 'course_nr'); ?>

	<?php
	echo $form->dropDownListRow($model, 'center', array_combine($centrals, $centrals),
	array(
		'ajax' => array(
			'type'=>'POST', //request type
			'url'=>CController::createUrl('course/Dynamic'), //url to call.
			'update'=>'#test', //selector to update
		)
	));   
	?>  
    <?php echo $form->dropDownListRow($model, 'category1', array_combine($categories, $categories)); ?>         
    <?php echo $form->dropDownListRow($model, 'category2', array_combine($categories, $categories)); ?>    
    <?php echo $form->dropDownListRow($model, 'type', array_combine($types, $types)); ?>    
    <?php echo $form->textFieldRow($model, 'title'); ?>
    <?php echo $form->html5EditorRow($model, 'requirement', array('class'=>'span4', 'rows'=>5, 'height'=>'200', 'options'=>array('color'=>true))); ?>
    <?php echo $form->html5EditorRow($model, 'content', array('class'=>'span4', 'rows'=>5, 'height'=>'200', 'options'=>array('color'=>true))); ?> 
    <?php echo $form->html5EditorRow($model, 'description', array('class'=>'span4', 'rows'=>5, 'height'=>'200', 'options'=>array('color'=>true))); ?> 
    <?php /* echo $form->textFieldRow($model, 'place'); */ ?>
    
    
	<div id="test">		
		<?php echo $form->textFieldRow($model, 'place'); ?>
	</div> 
    
    
    <?php echo $form->datepickerRow($model, 'start', array('prepend'=>'<i class="icon-calendar"></i>', 'options'=>array( 
    									'format' => 'dd.mm.yyyy', 
                                        'weekStart'=> 1,
                                        'showButtonPanel' => true,
                                        'showAnim'=>'fold'))); ?>
    <?php echo $form->datepickerRow($model, 'end', array('prepend'=>'<i class="icon-calendar"></i>', 'options'=>array( 
    									'format' => 'dd.mm.yyyy', 
                                        'weekStart'=> 1,
                                        'showButtonPanel' => true,
                                        'showAnim'=>'fold'))); ?>    
    <?php echo $form->datepickerRow($model, 'expiry', array('prepend'=>'<i class="icon-calendar"></i>', 'options'=>array( 
    									'format' => 'dd.mm.yyyy', 
                                        'weekStart'=> 1,
                                        'showButtonPanel' => true,
                                        'showAnim'=>'fold'))); ?>    <?php echo $form->dropDownListRow($model, 'status', array_combine($status, $status)); ?>    
    <?php echo $form->textFieldRow($model, 'duration'); ?>
    <?php echo $form->textFieldRow($model, 'ue'); ?>
    <?php echo $form->textFieldRow($model, 'min_participants'); ?>
    <?php echo $form->textFieldRow($model, 'max_participants'); ?>
    <?php echo $form->textFieldRow($model, 'price'); ?> 
    <?php echo $form->dropDownListRow($model, 'class_time', array_combine($class_time, $class_time)); ?>   
    <?php echo $form->dropDownListRow($model, 'graduation', array_combine($graduation, $graduation)); ?>    
	<?php echo $form->checkBoxRow($model, 'statistics', array('disabled'=>false)); ?>
    <?php /* echo $form->dropDownListRow($model, 'lead_trainer', $trainer);  */?>       
	<?php /* echo $form->checkBoxListRow($model, 'trainer', $t); */ ?>

</fieldset>

     
<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Speichern')); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Zurücksetzen')); ?>
</div>
     
<?php $this->endWidget(); ?>