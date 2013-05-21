<?php
/* @var $this CommentController */
/* @var $dataProvider CActiveDataProvider */
/* @var $page_title */
/* @var $page_id */

$this->breadcrumbs=array(
	$page_title => array('//page/view/'.$page_id),
	'Comments',
);

$this->menu=array(
	array('label'=>'Create Comment', 'url'=>array('createCommentForPage?pageID=' . $page_id)),
	array('label'=>'Manage Comment', 'url'=>array('admin')),
);
?>

<h1>Comments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
