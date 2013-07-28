<?php
/* @var $this CourseController */
/* @var $model Course */
?>

<?php

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Kurse'=>'admin', 'Erstellen'),
));


echo $this->renderPartial('_form', array('model'=>$model)); 

?>