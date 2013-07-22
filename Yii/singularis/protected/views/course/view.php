<?php
/* @var $this CourseController */
/* @var $model Course */

?>

<h1>Kurs <?php echo $model->course_id; ?></h1>

<?php

$this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('name'=>'name_full', 'label'=>'Name'),
		array('name'=>'name_short', 'label'=>'Kürzel'),
		array('name'=>'start', 'label'=>'Start'),
		array('name'=>'end', 'label'=>'Ende'),
		array('name'=>'place', 'label'=>'Ort'),
		array('name'=>'description', 'label'=>'Beschreibung'),
	),
));


$users=new CArrayDataProvider($model->users, array(
    'keyField'=>'user_id'
));


$this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'fixedHeader' => true,
	'headerOffset' => 40, // 40px is the height of the main navigation at bootstrap
	'type'=>'striped bordered',
	'dataProvider' => $users,
	'template' => "{items}",
    'columns'=> array(
		'user_id',
		'username',
	)
));

$this->widget('bootstrap.widgets.TbButton',array(
	'label' => 'Teilnehmer hinzufügen',
	'size' => 'medium',
	'url' => '#'
));

?>
