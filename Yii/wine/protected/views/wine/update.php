<?php
/* @var $this WineController */
/* @var $model Wine */

$this->breadcrumbs=array(
	'Wines'=>array('index'),
	$model->name=>array('view','id'=>$model->wine_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Wine', 'url'=>array('index')),
	array('label'=>'Create Wine', 'url'=>array('create')),
	array('label'=>'View Wine', 'url'=>array('view', 'id'=>$model->wine_id)),
	array('label'=>'Manage Wine', 'url'=>array('admin')),
);
?>

<h1>Update Wine <?php echo $model->wine_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>