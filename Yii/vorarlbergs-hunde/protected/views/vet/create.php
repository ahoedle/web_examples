<?php
/* @var $this VetController */
/* @var $model Vet */

$this->breadcrumbs=array(
	'Vets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Vet', 'url'=>array('index')),
	array('label'=>'Manage Vet', 'url'=>array('admin')),
);
?>

<h1>Create Vet</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>