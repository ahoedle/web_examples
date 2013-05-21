<?php /* @var $this Controller */ ?>

<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <script src="js/html5.js"></script>
        <!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bildschirm.css" media="screen" />
    </head>
    
    <body>
        <div id="wrapper">
	
            <div id="kopfbereich">
                    <h1>My Layout</h1>
            </div> <!-- Ende kopfbereich -->

            <div id="navibereich">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/page/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
            </div> <!-- Ende navibereich -->

            <div id="textbereich">
                <?php echo $content; ?>
            </div> <!-- Ende textbereich -->

            <div id="fussbereich">
                    <a href="#wrapper">Nach oben</a>

                    <address>
                            Little Boxes &middot; Kästchenweg 12 
                            &middot; 01234 Boxberg
                            </br>
                            Tel: 01234 567890 &middot; Fax: 01234 567891
                    </address>
            </div> <!-- Ende fussbereich -->
		
	</div> <!-- Ende wrapper -->
    </body>
</html>
