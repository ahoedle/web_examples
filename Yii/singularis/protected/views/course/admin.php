<?php
/* @var $this CourseController */
/* @var $model Course */

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
	'links'=>array('Kurse'),
));

?>


<h1>Kursübersicht</h1>


<?php



$this->widget('bootstrap.widgets.TbGridView', array(
/*
	'type'=>'striped bordered condensed',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'template'=>"{items}\n{pager}",
*/
	
	'type'=>'striped bordered condensed',
	'dataProvider'=>$model->search(),
	'template'=>"{items}",
	'filter'=>$model,
/* 	'columns'=>$gridColumns, */
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
/*
		array(
			'header' => Yii::t('ses', 'Edit'),
			'class' => 'bootstrap.widgets.TbJsonButtonColumn',
			'template' => '{view} {delete}',
		),
*/
	),
));
?>
