<?php
/* @var $this PageController */
/* @var $dataProvider CActiveDataProvider */

/* $this->breadcrumbs=array(''); */

/*
$this->menu=array(
	array('label'=>'Create new page', 'url'=>array('create')),
	array('label'=>'Manage pages', 'url'=>array('admin')),
);
*/
?>

<!-- <h1>Pages</h1> -->

<?php
/*
	echo('<b>Hello ' . Yii::app()->user->type . '! </b></br></br>');
	echo '<p>Create Page: ' . Yii::app()->user->checkAccess('createPage') . '</p>';
	echo '<p>Update Page: ' . Yii::app()->user->checkAccess('updatePage') . '</p>';
	echo '<p>Create Comment: ' . Yii::app()->user->checkAccess('createComment') . '</p>';
	echo '<p>Update Comment: ' . Yii::app()->user->checkAccess('updateComment') . '</p>';
	echo '<p>Delete User: ' . Yii::app()->user->checkAccess('deleteUser') . '</p>';
	echo '<p>Update User: ' . Yii::app()->user->checkAccess('updateUser') . '</p>';
*/
?>

<?php 

/*
$this->tabs = array(
	array('label'=>'Blog', 'url'=>array('/page/index/')),
	array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
	array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
);
*/

if (isset(Yii::app()->user->type)){
	$this->tabs = MenuRenderer::renderMainMenu(Yii::app()->user->type);	
} else {
	$this->tabs = MenuRenderer::renderMainMenu('');		
}

$dataProvider->sort->defaultOrder='date_published DESC';

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'sortableAttributes'=>array(
    	'date_published',
    ),
)); 
?>

