<?php
/* @var $this VetController */
/* @var $model Vet */

?>
<ul>
<?php
	
	$place = "";
	
	foreach($model as $m) {
		if ($m->place != $place) {
			
			$place = $m->place;
			
			?>
			</ul>
			<h1><?php echo $m->place;?></h1>			
			<ul>
			
			<?php
		}else{
			?>
			
			<?php
		}
		?>
		
		<li><?php echo CHtml::link($m->name, $this->createUrl('vet/view', array('id' => $m->vet_id))); ?></li>
<?php
	}
?>
</ul>