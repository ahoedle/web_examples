<?php
/* @var $this CourseController */
/* @var $model Course */

?>

<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Kurse'=>'/index.php/course/admin', 'Kurs '.$model->course_id),
));
?>

<h1>Kurs <?php echo $model->course_id; ?></h1></br>

<?php

$this->widget('bootstrap.widgets.TbEditableDetailView', array(
	'id' => 'region-details',
	'data' => $model,
	'url' => $this->createUrl('site/editable'), //common submit url for all editables
	'attributes'=>array(
		array('name'=>'name_full', 'label'=>'Name'),
		array('name'=>'name_short', 'label'=>'Kürzel'),
		array('name'=>'start', 'label'=>'Start'),
		array('name'=>'end', 'label'=>'Ende'),
		array('name'=>'place', 'label'=>'Ort'),
		array('name'=>'description', 'label'=>'Beschreibung'),
	)
));

?>

<h2>Teilnehmer: </h2>

<?php

$users=new CArrayDataProvider($model->users, array(
    'keyField'=>'user_id'
));

$this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$users,
    'template'=>"{items}\n{pager}",
/*     'filter'=>$users, */
    'columns'=> array(
		'username',

		array(
			'class'=>'CButtonColumn',
		),
	),
));

$this->widget('bootstrap.widgets.TbButton',array(
	'label' => 'Teilnehmer hinzufügen',
	'size' => 'medium',
	'url' => $this->createUrl('course/addUserToCourse', array('course_id'=>$model->course_id)),
));

?>
