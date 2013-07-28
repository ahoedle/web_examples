<?php
/* @var $this OpeningController */
/* @var $model Opening */

$this->breadcrumbs=array(
	'Openings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opening', 'url'=>array('index')),
	array('label'=>'Manage Opening', 'url'=>array('admin')),
);
?>

<h1>Create Opening</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>