<?php
/* @var $this CoursController */
/* @var $model Cours */

$this->breadcrumbs=array(
	'Cours'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Cours', 'url'=>array('index')),
	array('label'=>'Create Cours', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cours-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Cours</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cours-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'course_id',
		'name_full',
		'start',
		'end',
		'place',
		'description',
		/*
		'visible',
		'course_nr',
		'category1',
		'category2',
		'type',
		'requirement',
		'content',
		'center',
		'status',
		'expiry',
		'duration',
		'ue',
		'min_participants',
		'max_participants',
		'price',
		'class_time',
		'graduation',
		'statistics',
		'invoice',
		'link',
		'lead_trainer',
		'trainer',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
