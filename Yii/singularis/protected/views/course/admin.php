<?php
/* @var $this CourseController */
/* @var $model Course */

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
	'links'=>array('Kurse'),
));

?>


<h1>Kursübersicht</h1>


<?php
$this->widget('bootstrap.widgets.TbJsonGridView', array(
	'dataProvider' => $model->search(),
	'filter' => $model,
	'type' => 'striped bordered condensed',
	'summaryText' => false,
	'cacheTTL' => 10, // cache will be stored 10 seconds (see cacheTTLType)
	'cacheTTLType' => 's', // type can be of seconds, minutes or hours
	'columns' => array(
/* 		'course_id', */
		'course_nr',
		'center',
/*
		'category1',
		'category2',
		'type',
*/
		'name_full',
/*
		'requirement',
		'content',
		'description',
		'place',
*/
		'start',
/* 		'status', */
		'end',
/*
		'expiry',
		'duration',
		'ue',
		'min_participants',
		'max_participants',
		'price',
		'class_time',
		'graduation',
		'statistics',
		'invoice',
		'link',
*/

/*
		array(
			'name' => 'create_time',
			'type' => 'datetime'
		),
*/
		array(
			'header' => Yii::t('ses', 'Edit'),
			'class' => 'bootstrap.widgets.TbJsonButtonColumn',
			'template' => '{view} {delete}',
		),
	),
));
?>
