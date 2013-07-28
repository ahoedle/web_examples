<?php
/* @var $this OpeningController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Openings',
);

$this->menu=array(
	array('label'=>'Create Opening', 'url'=>array('create')),
	array('label'=>'Manage Opening', 'url'=>array('admin')),
);
?>

<h1>Openings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
