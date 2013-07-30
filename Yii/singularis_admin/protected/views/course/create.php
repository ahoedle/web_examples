<?php
/* @var $this CourseController */
/* @var $model Course */



$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'tabs', // 'tabs' or 'pills'
	'tabs'=>array(
		array('label'=>'NEU', 'url'=>$this->createUrl('course/create'), 'active'=>true),
		array('label'=>'NEU aus Vorlage', 'url'=>$this->createUrl('course/create')), //TODO
/*
		array('label'=>'Profile', 'content'=>'Profile Content'),
		array('label'=>'Messages', 'content'=>'Messages Content'),
*/
	),
));

?>

<!-- <h1>Create Course</h1> -->

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>