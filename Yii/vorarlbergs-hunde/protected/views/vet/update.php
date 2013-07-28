<?php
/* @var $this VetController */
/* @var $model Vet */

$this->breadcrumbs=array(
	'Vets'=>array('index'),
	$model->name=>array('view','id'=>$model->vet_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vet', 'url'=>array('index')),
	array('label'=>'Create Vet', 'url'=>array('create')),
	array('label'=>'View Vet', 'url'=>array('view', 'id'=>$model->vet_id)),
	array('label'=>'Manage Vet', 'url'=>array('admin')),
);
?>

<h1>Update Vet <?php echo $model->vet_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>