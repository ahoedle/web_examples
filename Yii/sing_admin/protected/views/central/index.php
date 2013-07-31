<?php
/* @var $this CentralController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Centrals',
);

$this->menu=array(
	array('label'=>'Create Central', 'url'=>array('create')),
	array('label'=>'Manage Central', 'url'=>array('admin')),
);
?>

<h1>Centrals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
