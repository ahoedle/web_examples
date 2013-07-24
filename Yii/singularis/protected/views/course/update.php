<?php
/* @var $this CourseController */
/* @var $model Course */

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
	'links'=>array('Kurse'=>'admin', 'Kurs '.$model->course_nr),
));

?>

<h1>Kurs <?php echo $model->course_nr; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>