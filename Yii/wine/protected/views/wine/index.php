<?php
/* @var $this WineController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Wines',
);

$this->menu=array(
	array('label'=>'Create Wine', 'url'=>array('create')),
	array('label'=>'Manage Wine', 'url'=>array('admin')),
);
?>

<h1>Wines</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
