<?php
/* @var $this InvoiceAddressController */
/* @var $model InvoiceAddress */

$this->breadcrumbs=array(
	'Invoice Addresses'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List InvoiceAddress', 'url'=>array('index')),
	array('label'=>'Create InvoiceAddress', 'url'=>array('create')),
	array('label'=>'Update InvoiceAddress', 'url'=>array('update', 'id'=>$model->address_id)),
	array('label'=>'Delete InvoiceAddress', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->address_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InvoiceAddress', 'url'=>array('admin')),
);
?>

<h1>View InvoiceAddress #<?php echo $model->address_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'address_id',
		'name',
		'nr',
		'contact',
		'address',
		'postcode',
		'place',
		'tel',
		'email',
		'url',
		'type',
		'user_id',
	),
)); ?>
