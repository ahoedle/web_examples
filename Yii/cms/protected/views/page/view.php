<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	/*'Pages'=>array('index'),*/
	$model->title,
);

/*
$this->tabs = array(
	array('label'=>'Blog', 'url'=>array('/page/index/'), 'active'=>true),
	array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
	array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
);
*/

$this->tabs = MenuRenderer::renderMainMenu(Yii::app()->user->type);

echo '<div id="page_content">';

	echo '<div id="small_headline">';
		echo($model->date_published . ', ' . $model->user->username);
		echo '</br></br>';
	echo '</div>'; 

	$this->pageTitle = CHtml::encode($model->title); 
?>
	
	<h1><?php echo CHtml::encode($model->title); ?></h1>
	</br>
<?php
	echo $model->content;
	echo '</br></br>';
echo '</div>';

echo CHtml::link('<< Back',Yii::app()->request->urlReferrer);
echo '</br></br>';
?>

<?php
echo '<div id="comment_content">';

	$dataProvider = $this->getComments($model->id);
	
	$this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'//comment/_view',
	)); 
	
	$comment = new Comment();
	?>
	
	</br>
	
	<?php 
	echo CHtml::link('Add comment', array('comment/createCommentForPage', 'pageID' => $model->id));
echo '</div>';
?>
