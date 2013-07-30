<?php
/* @var $this CoursetemplateController */
/* @var $model Coursetemplate */

$this->breadcrumbs=array(
	'Coursetemplates'=>array('index'),
	$model->title=>array('view','id'=>$model->template_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Coursetemplate', 'url'=>array('index')),
	array('label'=>'Create Coursetemplate', 'url'=>array('create')),
	array('label'=>'View Coursetemplate', 'url'=>array('view', 'id'=>$model->template_id)),
	array('label'=>'Manage Coursetemplate', 'url'=>array('admin')),
);
?>

<h1>Update Coursetemplate <?php echo $model->template_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>