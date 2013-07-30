<?php
/* @var $this ClassTimeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Class Times',
);

$this->menu=array(
	array('label'=>'Create ClassTime', 'url'=>array('create')),
	array('label'=>'Manage ClassTime', 'url'=>array('admin')),
);
?>

<h1>Class Times</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
