<?php
/* @var $this PageController */
/* @var $model Page */

$this->tabs = MenuRenderer::renderMainMenu(Yii::app()->user->type, false);
?>
<h1>Create a new page:</h1></br>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

