<?php
/* @var $this CourseController */
/* @var $model Course */
<<<<<<< HEAD

/*
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
*/
?>
=======
?>

<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Kurse'),
));
?>


>>>>>>> 31e821c3fe3d70b0c822fcec585f1eca6f9f2d92
</br>
<h1>Kurse verwalten</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$model->search(),
    'template'=>"{items}\n{pager}",
    'filter'=>$model,
    'columns'=> array(
		'course_id',
		array(
			'class' => 'bootstrap.widgets.TbEditableColumn',
			'name' => 'name_full',
			'sortable'=>true,
			'editable' => array(
				'url' => $this->createUrl('course/editableSaver'),
			)
		),
		array(
			'class' => 'bootstrap.widgets.TbEditableColumn',
			'name' => 'name_short',
			'sortable'=>true,
			'editable' => array(
				'url' => $this->createUrl('course/editableSaver'),
			)
		),
		array(
			'class' => 'bootstrap.widgets.TbEditableColumn',
			'name' => 'start',
			'sortable'=>true,
			'editable' => array(
				'url' => $this->createUrl('course/editableSaver'),
			)
		),
		array(
			'class' => 'bootstrap.widgets.TbEditableColumn',
			'name' => 'end',
			'sortable'=>true,
			'editable' => array(
				'url' => $this->createUrl('course/editableSaver'),
			)
		),
		array(
			'class' => 'bootstrap.widgets.TbEditableColumn',
			'name' => 'place',
			'sortable'=>true,
			'editable' => array(
				'url' => $this->createUrl('course/editableSaver'),
			)
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
));
?>

