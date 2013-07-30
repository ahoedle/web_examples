<?php
/* @var $this CoursetemplateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Coursetemplates',
);

$this->menu=array(
	array('label'=>'Create Coursetemplate', 'url'=>array('create')),
	array('label'=>'Manage Coursetemplate', 'url'=>array('admin')),
);
?>

<h1>Coursetemplates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
