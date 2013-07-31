<?php
/* @var $this CourseController */
/* @var $model Course */

/*
$this->breadcrumbs=array(
	'Courses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Course', 'url'=>array('index')),
	array('label'=>'Create Course', 'url'=>array('create')),
);
*/

/*
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#course-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
*/
?>

<!--
<h1>Manage Courses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
-->

<!-- </div> -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
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
		/*
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
		'trainer',
		'master_course_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
