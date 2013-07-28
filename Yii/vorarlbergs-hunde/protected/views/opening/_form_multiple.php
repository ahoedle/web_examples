<?php
/* @var $this OpeningController */
/* @var $items */
?>

<div class="form">

<?php echo CHtml::beginForm(); ?>

<table>
<tr><th>id</th><th>day</th><th>open1</th><th>close1</th><th>open2</th><th>close2</th><th>vet_id</th></tr>
	<?php foreach($items as $i=>$item): ?>
		<tr>
			<td><?php echo CHtml::activeTextField($item,"[$i]opening_id", array('size'=>5,'maxlength'=>5)); ?></td>
			<td><?php echo CHtml::activeTextField($item,"[$i]weekday", array('size'=>2,'maxlength'=>2)); ?></td>
			<td><?php echo CHtml::activeTextField($item,"[$i]open1"); ?></td>
			<td><?php echo CHtml::activeTextField($item,"[$i]close1"); ?></td>
			<td><?php echo CHtml::activeTextField($item,"[$i]open2"); ?></td>
			<td><?php echo CHtml::activeTextField($item,"[$i]close2"); ?></td>
			<td><?php echo CHtml::activeTextField($item,"[$i]vet_id", array('size'=>2,'maxlength'=>2)); ?></td>
		</tr>
	<?php endforeach; ?>
</table>
 
<?php echo CHtml::submitButton('Save'); ?>
<?php echo CHtml::endForm(); ?>

</div><!-- form -->