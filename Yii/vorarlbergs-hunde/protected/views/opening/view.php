<?php
/* @var $this OpeningController */
/* @var $model Opening */

$this->breadcrumbs=array(
	'Openings'=>array('index'),
	$model->opening_id,
);

$this->menu=array(
	array('label'=>'List Opening', 'url'=>array('index')),
	array('label'=>'Create Opening', 'url'=>array('create')),
	array('label'=>'Update Opening', 'url'=>array('update', 'id'=>$model->opening_id)),
	array('label'=>'Delete Opening', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->opening_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opening', 'url'=>array('admin')),
);
?>

<h1>View Opening #<?php echo $model->opening_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'opening_id',
		'weekday',
		'open1',
		'close1',
		'open2',
		'close2',
		'vet_id',
	),
)); ?>
