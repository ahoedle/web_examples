<?php
/* @var $this CoursetemplateController */
/* @var $model Coursetemplate */

$this->breadcrumbs=array(
	'Coursetemplates'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Coursetemplate', 'url'=>array('index')),
	array('label'=>'Create Coursetemplate', 'url'=>array('create')),
	array('label'=>'Update Coursetemplate', 'url'=>array('update', 'id'=>$model->template_id)),
	array('label'=>'Delete Coursetemplate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->template_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Coursetemplate', 'url'=>array('admin')),
);
?>

<h1>View Coursetemplate #<?php echo $model->template_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'template_id',
		'category1',
		'category2',
		'type',
		'title',
		'requirement',
		'content',
		'description',
		'duration',
		'ue',
		'min_participants',
		'max_participants',
		'price',
		'class_time',
		'graduation',
		'statistics',
	),
)); ?>
