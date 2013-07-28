<?php
/* @var $this OpeningController */
/* @var $model Opening */

$this->breadcrumbs=array(
	'Openings'=>array('index'),
	$model->opening_id=>array('view','id'=>$model->opening_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opening', 'url'=>array('index')),
	array('label'=>'Create Opening', 'url'=>array('create')),
	array('label'=>'View Opening', 'url'=>array('view', 'id'=>$model->opening_id)),
	array('label'=>'Manage Opening', 'url'=>array('admin')),
);
?>

<h1>Update Opening <?php echo $model->opening_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>