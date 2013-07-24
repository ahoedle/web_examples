<?php
/* @var $this CourseController */
/* @var $model Course */
?>

<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Kurse'),
));
?>


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

