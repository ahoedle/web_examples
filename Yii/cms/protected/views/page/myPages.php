<?php

if (isset(Yii::app()->user->type)) {
	$this->tabs = MenuRenderer::renderMainMenu(Yii::app()->user->type, false);	
} else {
	$this->tabs = MenuRenderer::renderMainMenu('');		
}

$dataProvider->sort->defaultOrder='date_published DESC';

$gridColumns = array(
	array('name'=>'title', 'header'=>'Title'),
	array('name'=>'content', 'header'=>'Content'),
	array('name'=>'date_published', 'header'=>'Published'),
	array(
		'htmlOptions' => array('nowrap'=>'nowrap'),
		'class'=>'bootstrap.widgets.TbButtonColumn',
		'viewButtonUrl'=>'Yii::app()->controller->createUrl("page/view", array("id"=>$data->id));',
		'updateButtonUrl'=>'Yii::app()->controller->createUrl("page/update", array("id"=>$data->id));',
		'deleteButtonUrl'=>'Yii::app()->controller->createUrl("page/delete", array("id"=>$data->id));',
	),
);

$this->widget('bootstrap.widgets.TbGridView', array(
	'dataProvider'=>$dataProvider,
	'type'=>'striped',
	'template'=>"{items}",
	'columns'=>$gridColumns,
));

?>