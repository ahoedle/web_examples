<?php
/* @var $this CoursetemplaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Coursetemplas',
);

$this->menu=array(
	array('label'=>'Create Coursetempla', 'url'=>array('create')),
	array('label'=>'Manage Coursetempla', 'url'=>array('admin')),
);
?>

<h1>Coursetemplas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
