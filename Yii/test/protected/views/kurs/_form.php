<?php
/* @var $this KursController */
/* @var $model Kurs */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kurs-form',
)); ?>

<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>
	
	<?php
	
	$data = CHtml::listData(Kurs::model()->findAll(), 'id', 'ort_dropdown');

    $newData = array();
    
    foreach ($data as $value) {
        $newData[$value] = $value;
    }

	echo CHtml::dropDownList('ort_dropdown','', $newData,
	array(
		'ajax' => array(
			'type'=>'POST', //request type
			'url'=>CController::createUrl('Kurs/dynamic'), //url to call.
			'update'=>'#test', //selector to update
		)
	)); 
	?>
		
	<div id="test">
		<?php
		echo CHtml::textField('ort','Test', array());
		?>
	</div>

	<div class="row buttons">
		<?php /*
echo CHtml::ajaxSubmitButton('Submit', $this->createUrl("Kurs/speichern"), array(
			'type' => 'POST',
			'dataType' => 'json',
			'data' => array('ort_dropdown' => 'js:$("#ort_dropdown").val()',
							'ort' => 'js:$("#ort").val()',
							),
		)); 
*/?>
		
		<?php echo CHtml::button('Submit', array(
			'submit' => $this->createUrl("Kurs/speichern"),
			'params' => array('ort' => 'js:$("#ort").val()'),
		));?>
		
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->