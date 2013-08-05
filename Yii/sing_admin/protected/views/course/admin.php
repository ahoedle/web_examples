<?php
/* @var $this CourseController */
/* @var $model Course */

$this->breadcrumbs=array(
	'Courses'=>array('index'),
	'Manage',
);

/*
$this->menu=array(
	array('label'=>'List Course', 'url'=>array('index')),
	array('label'=>'Create Course', 'url'=>array('create')),
);
*/

?>


<?php
    $this->widget('bootstrap.widgets.TbExtendedGridView', array(
    'filter'=>$model,
    'fixedHeader' => true,
    'headerOffset' => 40, // 40px is the height of the main navigation at bootstrap
    'type'=>'striped bordered',
    'dataProvider' => $model->search(),
    'template' => "{items}",
	'columns'=>array(
/* 		'course_id', */
		'course_nr',
		'center',
/*
		'category1',
		'category2',
		'type',
		'title',
		'requirement',
		'content',
		'description',
*/
		'place',
		'start',
		'end',
/* 		'expiry', */
		'status',
/* 		'duration', */
/* 		'ue', */
/*
		'min_participants',
		'max_participants',
		'price',
		'class_time',
		'graduation',
		'statistics',
*/
		'lead_trainer',
		'trainer',
/* 		'master_course_id', */
		
		array(
			'class'=>'CButtonColumn',
		),
	),
    ));
?>


<?php /*
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'course-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'course_id',
		'course_nr',
		'center',
		'category1',
		'category2',
		'type',
				'title',
		'requirement',
		'content',
		'description',
		'place',
		'start',
		'end',
		'expiry',
		'status',
		'duration',
		'ue',
		'min_participants',
		'max_participants',
		'price',
		'class_time',
		'graduation',
		'statistics',
		'lead_trainer',
		'trainer',
		'master_course_id',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); 
*/?>
