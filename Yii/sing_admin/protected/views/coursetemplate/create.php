<?php
/* @var $this CoursetemplateController */
/* @var $model Coursetemplate */

$this->breadcrumbs=array(
	'Coursetemplates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Coursetemplate', 'url'=>array('index')),
	array('label'=>'Manage Coursetemplate', 'url'=>array('admin')),
);
?>

<h1>Create Coursetemplate</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>