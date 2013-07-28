<?php
/* @var $this CourseController */
/* @var $model all Users */
/* @var $course_id Course ID*/
?>

<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Kurse'=>'admin', 'Kurs '.$course_id => 'view/'.$course_id, 'Teilnehmer hinzufügen'),
));
?>

<h1>Teilnehmer hinzufügen</h1>

<?php

$dataProvider=new CArrayDataProvider($model, array(
    'keyField'=>'user_id'
));

/* $filterModel = new CModel($model); */

$form=$this->beginWidget('CActiveForm', array('enableAjaxValidation'=>true,)); 

    $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'menu-grid',
    'dataProvider'=>$dataProvider,
/*     'filter'=>$filterModel, */
    'columns'=>array(
        array(
            'id'=>'autoId',
            'class'=>'CCheckBoxColumn',
            'selectableRows' => '50',   
        ),
        'user_id',
        'username',

        array(
            'class'=>'CButtonColumn',
        ),
    ),
));

echo(CHtml::button('Teilnehmer hinzufügen', array('submit'=>array('course/ajaxupdate', 'course_id'=>$course_id))));

?>

<?php $this->endWidget(); ?>
