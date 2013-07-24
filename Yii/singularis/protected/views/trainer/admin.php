<?php
/* @var $this TrainerController */
/* @var $model Trainer */

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
	'links'=>array('Trainer'),
));

?>

<h1>Trainerübersicht</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'striped bordered condensed',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'template'=>"{items}",
	'columns' => array(
		'trainer_id',
		'first_name',
		'last_name',
		'subjects',
	),
));
?>


