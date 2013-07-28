<?php
/* @var $this VetController */
/* @var $data Vet */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('vet_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->vet_id), array('view', 'id'=>$data->vet_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postcode')); ?>:</b>
	<?php echo CHtml::encode($data->postcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place')); ?>:</b>
	<?php echo CHtml::encode($data->place); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel')); ?>:</b>
	<?php echo CHtml::encode($data->tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fax')); ?>:</b>
	<?php echo CHtml::encode($data->fax); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage')); ?>:</b>
	<?php echo CHtml::encode($data->homepage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Notfaelle')); ?>:</b>
	<?php echo CHtml::encode($data->Notfaelle); ?>
	<br />

	*/ ?>

</div>