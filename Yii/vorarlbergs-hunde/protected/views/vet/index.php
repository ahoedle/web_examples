<?php
/* @var $this VetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vets',
);

$this->menu=array(
	array('label'=>'Create Vet', 'url'=>array('create')),
	array('label'=>'Manage Vet', 'url'=>array('admin')),
);
?>

<h1>Vets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
