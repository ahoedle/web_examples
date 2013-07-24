<?php
/* @var $this TrainerController */
/* @var $model Trainer */

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
	'links'=>array('Trainer'=>'admin', $model->first_name . ' ' . $model->last_name),
));

?>

</br>
<h1><?php echo $model->first_name . ' ' . $model->last_name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>