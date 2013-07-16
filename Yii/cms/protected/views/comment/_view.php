<?php
/* @var $this CommentController */
/* @var $data Comment */
?>

<div class="view">

	<?php echo '<b>' . CHtml::encode($data->user->username) . '</b>'; ?>
	
	<br />
	
	<?php echo CHtml::encode($data->date_entered); ?>

	<br /><br />
	
	<?php echo CHtml::encode($data->comment); ?>
	
	<br /><br />

</div>