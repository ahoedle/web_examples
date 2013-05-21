<?php
/* @var $this PageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(''/*'Pages',*/);

$this->menu=array(
	array('label'=>'Create new page', 'url'=>array('create')),
	array('label'=>'Manage pages', 'url'=>array('admin')),
);
?>

<h1>Pages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'sortableAttributes'=>array(
    'date_published',
    ),
)); ?>
