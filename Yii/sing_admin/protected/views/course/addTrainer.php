<?php
/* @var $this CourseController */
/* @var $course_id */

$this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'type' => 'striped bordered',
	'dataProvider' => $model->search(),
/* 	'filter' => $model, */
/* 	'template' => "{items}", */
	'bulkActions' => array(
		'actionButtons' => array(
			array(
				'buttonType' => 'button',
				'type' => 'primary',
				'size' => 'small',
				'label' => 'Testing Primary Bulk Actions',
				'click' => 'js:function(values){console.log(values);}'
			)
		),
		// if grid doesn't have a checkbox column type, it will attach
		// one and this configuration will be part of it
/*
		'checkBoxColumnConfig' => array(
			'name' => 'id'
		),
*/
	),
	'columns'=>array(
        'trainer_id',
	)
));


?>