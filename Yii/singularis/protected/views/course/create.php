<?php
/* @var $this CourseController */
/* @var $model Course */

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
	'links'=>array('Kurse'=>'admin', 'Neuer Kurs'),
));

?>

<h1>Neuer Kurs erstellen</h1>
</br>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>