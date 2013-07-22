<?php
/* @var $this CourseController */
/* @var $users all Users */
/* @var $course_id Course ID*/
?>
<h1>Test</h1>
<?php

$dataProvider=new CArrayDataProvider($users, array(
    'keyField'=>'user_id'
));

$this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'grid-id',
        'dataProvider'=>$dataProvider,
        'selectableRows'=>2,
        'columns'=>array(
        	'username',
            array(	
        		'name' => 'username',
                'class'=>'CCheckBoxColumn',
                'id'=>'check-boxes',
                'checked'=>"0",
            ),
        ),
)); ?>

<?php
   echo CHtml::ajaxLink('Submit', Yii::app()->createUrl('controller/action'),
        array(
           'type'=>'POST',
           'data'=>'js:{ids : $.fn.yiiGridView.getChecked("grid-id","check-boxes")}'
        )
   );
?>


