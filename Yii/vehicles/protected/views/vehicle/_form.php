<?php
/* @var $this VehicleController */
/* @var $model Vehicle */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vehicle-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<div class="row">
        <?php echo $form->labelEx($model,'registration_number'); ?>
        <?php echo $form->textField($model,'registration_number',array('size'=>8,'maxlength'=>8)); ?>
        <?php echo $form->error($model,'registration_number'); ?>
    </div>
 
    <?php echo CHtml::button('HPI Check', array( 'onclick'=>"{hpiCheck();}" ) ); ?>
 
    <div id='hpistatus'></div>
 
    <div class="row">
        <?php echo $form->labelEx($model,'vehicle_make_id'); ?>
        <?php echo $form->dropDownList($model,'vehicle_make_id', CHtml::listData(VehicleMake::model()->findAll(), 'id', 'name')); ?>
        <?php echo $form->error($model,'vehicle_make_id'); ?>
    </div>
 
    <div class="row">
        <?php echo $form->labelEx($model,'vehicle_model_id'); ?>
        <?php echo $form->dropDownList($model,'vehicle_model_id', CHtml::listData(VehicleModel::model()->findAll(), 'id', 'name')); ?>
        <?php echo $form->error($model,'vehicle_model_id'); ?>
    </div>
 
    <div class="row">
        <?php echo $form->labelEx($model,'vehicle_colour_id'); ?>
        <?php echo $form->dropDownList($model,'vehicle_colour_id', CHtml::listData(VehicleColour::model()->findAll(), 'id', 'name')); ?>
        <?php echo $form->error($model,'vehicle_colour_id'); ?>
    </div>
 
    <script type="text/javascript">
    // The bits above should be familiar to you
    // This function is called by the "HPI check" button above
    function hpiCheck()
    {
        <?php echo CHtml::ajax(array(
                // the controller/function to call
                'url'=>CController::createUrl('vehicle/hpiCheck'), 
 
                // Data to be passed to the ajax function
                // Note that the ' should be escaped with \
                // The field id should be prefixed with the model name eg Vehicle_field_name
                'data'=>array('registration_number'=>'js:$(\'#Vehicle_registration_number\').val()', 
 
                // To pass multiple fields, just repeat eg:
                //              'chassis_number'=>'js:$(\'#Vehicle_chassis_number\').val()',
                                ),
                'type'=>'post',
                'dataType'=>'json',
                'success'=>"function(data)
                {
                    // data will contain the json data passed by the hpicheck action in the controller
                    // Update the status
                    $('#hpistatus').html(data.status);
                    if (data.error=='false')
                    {
                        // If there are no errors then update the fields
                        // As mentioned above, the id is prefixed by the model name eg Vehicle_field_name
 
                        // If its a new record, then add it to the select options first
                        if (data.colourOption!='') $('#Vehicle_vehicle_colour_id').append(data.colourOption);
                        // Then change the selected option
                        $('#Vehicle_vehicle_colour_id').val(data.colour_id);
                        if (data.makeOption!='') $('#Vehicle_vehicle_make_id').append(data.makeOption);
                        $('#Vehicle_vehicle_make_id').val(data.make_id);
                        if (data.modelOption!='') $('#Vehicle_vehicle_model_id').append(data.modelOption);
                        $('#Vehicle_vehicle_model_id').val(data.model_id);
                    }
 
                } ",
                ))?>;
        return false;  
    } 
    </script>

<?php $this->endWidget(); ?>

</div><!-- form -->