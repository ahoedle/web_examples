<?php
/* @var $this TrainerController */
/* @var $model Trainer */

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
	'links'=>array('Trainer'=>'admin', 'Neuer Trainer'),
));

?>

<h1>Neuer Trainer anlegen</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>