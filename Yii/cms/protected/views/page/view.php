<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	/*'Pages'=>array('index'),*/
	$model->title,
);

$this->menu=array(
	//array('label'=>'Show all pages', 'url'=>array('index')),
	//array('label'=>'Create new page', 'url'=>array('create')),
	array('label'=>'Edit page', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Page', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Page', 'url'=>array('admin')),
);
?>

<?php $this->pageTitle = CHtml::encode($model->title); ?>

<h1><?php echo CHtml::encode($model->title); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'live',
		'title',
		'content',
		'date_updated',
		'date_published',
	),
));?>

<?php
//echo $model->content;

//echo($model->date_published);

echo CHtml::link('Show comments', array('comment/viewCommentsFromPage', 'pageID' => $model->id));
?>
