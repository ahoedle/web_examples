<?php
/* @var $this CentralController */
/* @var $model Central */

$this->breadcrumbs=array(
	'Centrals'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Central', 'url'=>array('index')),
	array('label'=>'Create Central', 'url'=>array('create')),
	array('label'=>'View Central', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Central', 'url'=>array('admin')),
);
?>

<h1>Update Central <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>