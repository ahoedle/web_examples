<?php
/* @var $this InvoiceAddressController */
/* @var $model InvoiceAddress */

$this->breadcrumbs=array(
	'Invoice Addresses'=>array('index'),
	$model->name=>array('view','id'=>$model->address_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InvoiceAddress', 'url'=>array('index')),
	array('label'=>'Create InvoiceAddress', 'url'=>array('create')),
	array('label'=>'View InvoiceAddress', 'url'=>array('view', 'id'=>$model->address_id)),
	array('label'=>'Manage InvoiceAddress', 'url'=>array('admin')),
);
?>

<h1>Update InvoiceAddress <?php echo $model->address_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>