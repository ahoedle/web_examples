<?php
/* @var $this KursController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kurs',
);

$this->menu=array(
	array('label'=>'Create Kurs', 'url'=>array('create')),
	array('label'=>'Manage Kurs', 'url'=>array('admin')),
);
?>

<h1>Kurs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
