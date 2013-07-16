<?php
/* @var $this PageController */
/* @var $model Page */

$this->tabs = MenuRenderer::renderMainMenu(Yii::app()->user->type);

?>

<h1>Update page <?php //echo $model->id; ?></h1></br>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>