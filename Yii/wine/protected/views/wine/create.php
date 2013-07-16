<?php
/* @var $this WineController */
/* @var $model Wine */

$this->breadcrumbs=array(
	'Wines'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Wine', 'url'=>array('index')),
	array('label'=>'Manage Wine', 'url'=>array('admin')),
);
?>

<h1>Create Wine</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>