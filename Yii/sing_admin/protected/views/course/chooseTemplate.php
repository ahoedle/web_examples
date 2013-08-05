<?php
/* @var $this CoursetemplateController */
/* @var $model Coursetemplate */
?>

<?php
$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'tabs', // 'tabs' or 'pills'
	'tabs'=>array(
		array('label'=>'NEU', 'url'=>$this->createUrl('course/create'), 'active'=>false),
		array('label'=>'NEU aus Vorlage', 'url'=>$this->createUrl('course/chooseTemplate'), 'active'=>true), //TODO
	),
));
?>

<!-- <h1>Test</h1> -->

<?php

$templates = array();

foreach($model as $m) {
	$templates[$m->template_id] = $m->title;
}
?>


    <?php /** @var BootActiveForm $form */
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'horizontalForm',
    'type'=>'horizontal',
    )); ?>
     
    <fieldset>

    <?php echo $form->dropDownListRow($model[0], 'title', array_combine($templates, $templates)); ?>         
        
    </fieldset>
     
    <div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Auswählen')); ?>
    </div>
     
    <?php $this->endWidget(); ?>