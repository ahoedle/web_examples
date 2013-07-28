<?php
/* @var $this KursController */
/* @var $model Kurs */

$this->breadcrumbs=array(
	'Kurs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Kurs', 'url'=>array('index')),
	array('label'=>'Create Kurs', 'url'=>array('create')),
	array('label'=>'Update Kurs', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Kurs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kurs', 'url'=>array('admin')),
);
?>

<h1>View Kurs #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ort_dropdown',
		'ort',
	),
)); ?>
