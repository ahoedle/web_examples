<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $page_title */
/* @var $page_id */

$this->breadcrumbs=array(
	$page_title => array('//page/view/' . $page_id),
	'Comments' => array('viewCommentsFromPage?pageID=' . $page_id),
	'Create',
);

?>

<h1>Add Comment</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'page_id' => $page_id, 'page_title' => $page_title)); ?>