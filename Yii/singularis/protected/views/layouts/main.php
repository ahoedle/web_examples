<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
<!--
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
-->
	
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

<!--
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen2.css" />


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div id="header">

<!-- 	<h1>Singularis</h1> </br> -->
<h1></h1>

	
</div>

<div class="colmask leftmenu">
	
	<div class="colleft">
			
			<div class="col1">
				<?php echo $content; ?>
			</div>
			
			<div class="col2">
				<?php
				$this->widget('bootstrap.widgets.TbMenu', array(
						'type'=>'list',
						'items' => array(
						    array('label'=>'Kurse', 'itemOptions'=>array('class'=>'nav-header')),
						    array('label'=>'Verwalten', 'url'=>array('Course/Admin')), //'itemOptions'=>array('class'=>'active')),
						    array('label'=>'Erstellen', 'url'=>array('Course/Create')),
/* 						    array('label'=>'Applications', 'url'=>'#'), */
						    
/*
						    array('label'=>'Another list header', 'itemOptions'=>array('class'=>'nav-header')),
						    array('label'=>'Profile', 'url'=>'#'),
						    array('label'=>'Settings', 'url'=>'#'),
						    '',
						    array('label'=>'Help', 'url'=>'#'),
*/
				    )
				));
				?>
			</div>

		</div>
	</div>
</div>

<div id="footer">
	Copyright &copy; <?php echo date('Y'); ?> by .....<br/>
	All Rights Reserved.<br/>

</div>

</body>
</html>
