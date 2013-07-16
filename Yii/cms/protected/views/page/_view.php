<?php
/* @var $this PageController */
/* @var $data Page */
?>

<div class="view">
	<br/><br/>

	<?php echo '<div id="small_headline">'; ?>
	<?php echo CHtml::encode($data->date_published); ?>
	<?php echo '- '; ?>
	<?php echo CHtml::encode($data->user->username); ?>
	<?php echo '</div>'; ?>
	<br/>

	<?php echo '<h1>'; ?>
	<b><?php echo CHtml::encode($data->title);?></b>
	<?php echo '</h1>'; ?>
	<br/>
	<?php echo $data->getPreview(); ?></br></br>
	
	<?php echo CHtml::link(CHtml::encode('...weiterlesen'), array('view', 'id'=>$data->id)); ?>
	<br /></br>	<br/><br/>


</div>