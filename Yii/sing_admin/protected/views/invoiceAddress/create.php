<?php
/* @var $this InvoiceAddressController */
/* @var $model InvoiceAddress */

$this->breadcrumbs=array(
	'Invoice Addresses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InvoiceAddress', 'url'=>array('index')),
	array('label'=>'Manage InvoiceAddress', 'url'=>array('admin')),
);
?>

<h1>Create InvoiceAddress</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>