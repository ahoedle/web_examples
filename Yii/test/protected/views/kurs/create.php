<?php
/* @var $this KursController */
/* @var $model Kurs */

$this->breadcrumbs=array(
	'Kurs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kurs', 'url'=>array('index')),
	array('label'=>'Manage Kurs', 'url'=>array('admin')),
);
?>

<h1>Create Kurs</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>