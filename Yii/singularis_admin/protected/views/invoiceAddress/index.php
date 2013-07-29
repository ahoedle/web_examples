<?php
/* @var $this InvoiceAddressController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Invoice Addresses',
);

$this->menu=array(
	array('label'=>'Create InvoiceAddress', 'url'=>array('create')),
	array('label'=>'Manage InvoiceAddress', 'url'=>array('admin')),
);
?>

<h1>Invoice Addresses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
