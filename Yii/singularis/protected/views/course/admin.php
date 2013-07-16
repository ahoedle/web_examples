<?php
/* @var $this CourseController */
/* @var $model Course */

$this->breadcrumbs=array(
	'Courses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Course', 'url'=>array('index')),
	array('label'=>'Create Course', 'url'=>array('create')),
);

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
?>

<h1>Manage Courses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>


<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$model->search(),
    'template'=>"{items}",
    'filter'=>$model,
    'columns'=> array(
		'course_id',
		//'name_full',
		array(
			'class' => 'bootstrap.widgets.TbEditableColumn',
			'name' => 'name_full',
			'sortable'=>true,
			'editable' => array(
				'url' => $this->createUrl('course/editableSaver'),
/*
				'placement' => 'right',
				'inputclass' => 'span3'
*/
			)
		),
		'name_short',
		'start',
		'end',
		'place',
		/*
		'description',
		'visible',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
));
?>

