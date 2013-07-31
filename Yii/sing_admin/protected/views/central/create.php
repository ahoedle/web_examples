<?php
/* @var $this CentralController */
/* @var $model Central */

$this->breadcrumbs=array(
	'Centrals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Central', 'url'=>array('index')),
	array('label'=>'Manage Central', 'url'=>array('admin')),
);
?>

<h1>Create Central</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>