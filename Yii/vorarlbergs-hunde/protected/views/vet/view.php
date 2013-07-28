<?php
/* @var $this VetController */
/* @var $model Vet */

$this->breadcrumbs=array(
	'Vets'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Vet', 'url'=>array('index')),
	array('label'=>'Create Vet', 'url'=>array('create')),
	array('label'=>'Update Vet', 'url'=>array('update', 'id'=>$model->vet_id)),
	array('label'=>'Delete Vet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->vet_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vet', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'vet_id',
		'name',
		'address',
		'postcode',
		'place',
		'tel',
		'fax',
		'email:email',
		'homepage:url',
		'Notfaelle',
	),
)); 

echo CHtml::button('Kontaktdaten bearbeiten', array( 
	'submit' => $this->createUrl('Vet/update', array('id'=>$model->vet_id))
));

?>

</br></br>
<h3>Öffnungszeiten:</h3>

<?php

$dataProvider=new CActiveDataProvider('Opening', array(
    'criteria'=>array(
        'condition'=>'vet_id='.$model->vet_id,
        
    ),
    'pagination' => false,
));
$dataProvider->getData(); //will return a list of Post objects

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'summaryText' => false,
    'columns'=>array(
/* 		'opening_id', */
		'weekday',
		'open1',
		'close1',
		'open2',
		'close2',
/* 		'vet_id', */
/*
        array(           
            'class'=>'CButtonColumn',
        ),
*/
    ),
));

echo CHtml::button('Öffnungszeiten bearbeiten', array( 
	'submit' => $this->createUrl('Opening/batchUpdate', array('vet_id'=>$model->vet_id))
));

?>
