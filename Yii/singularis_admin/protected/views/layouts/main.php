<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<div id="container" id="page">
		<header>
	

		</header>
		
		<nav>
		<?php
		$this->widget('bootstrap.widgets.TbMenu', array(
			'type'=>'list',
			'items' => array(
/* 				array('label'=>'Home', 'url'=>$this->createUrl(''), 'itemOptions'=>array('class'=>'active')), */
				array('label'=>'Kurse', 'itemOptions'=>array('class'=>'nav-header')),
				array('label'=>'Suche', 'url'=>$this->createUrl('course/admin'), 'itemOptions'=>array('class'=>'active')),
				array('label'=>'Kurse', 'url'=>$this->createUrl('course/create')),
/*
				array('label'=>'Library', 'url'=>'#'),
				array('label'=>'Applications', 'url'=>'#'),
				array('label'=>'Another list header', 'itemOptions'=>array('class'=>'nav-header')),
				array('label'=>'Profile', 'url'=>'#'),
				array('label'=>'Settings', 'url'=>'#'),
				'',
				array('label'=>'Help', 'url'=>'#'),
*/
			)
		));
		?>
		</nav>

		<aside>

		</aside>
		
		<section id="content">
		
		
		
			<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				)); ?><!-- breadcrumbs -->
			<?php endif?>
		
			<?php echo $content; ?>
		
			<div class="clear"></div>
		</section>
 	
		<footer>		
			Copyright &copy; <?php echo date('Y'); ?> by <br/>
			<?php echo CHtml::image('../../images/logo.gif'); ?>
			<br/>
			All Rights Reserved.<br/>
		</footer>
	</div>
</body>

</html>



