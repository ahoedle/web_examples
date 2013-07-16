<?php
/* @var $this InvoiceController */
/* @var $model Invoice */

$this->breadcrumbs=array(
	'Invoices'=>array('index'),
	$model->invoice_id,
);

$this->menu=array(
	array('label'=>'List Invoice', 'url'=>array('index')),
	array('label'=>'Create Invoice', 'url'=>array('create')),
	array('label'=>'Update Invoice', 'url'=>array('update', 'id'=>$model->invoice_id)),
	array('label'=>'Delete Invoice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->invoice_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Invoice', 'url'=>array('admin')),
);
?>

<h1>View Invoice #<?php echo $model->invoice_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'invoice_id',
		'invoice_number',
		'customer_id',
	),
)); ?>
