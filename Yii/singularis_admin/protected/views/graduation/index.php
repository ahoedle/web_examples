<?php
/* @var $this GraduationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Graduations',
);

$this->menu=array(
	array('label'=>'Create Graduation', 'url'=>array('create')),
	array('label'=>'Manage Graduation', 'url'=>array('admin')),
);
?>

<h1>Graduations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
