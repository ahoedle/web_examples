<?php

class MenuRenderer {
	public static function renderMainMenu($type, $homeIsActive=true) {
		if ($type == 'admin') {
			return array(
				array('label'=>'Blog', 'url'=>array('/page/index/'), 'active'=>$homeIsActive),
				array('label'=>'Create Page', 'url'=>array('/page/create')),
				array('label'=>'Manage Pages', 'url'=>array('/page/admin')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			);
		} else if ($type == 'author') {
			return array(
				array('label'=>'Blog', 'url'=>array('/page/index/'), 'active'=>$homeIsActive),
				array('label'=>'Create Page', 'url'=>array('/page/create')),
				array('label'=>'Manage My Pages', 'url'=>array('/page/myPages')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			);		
		} else {
			return array(
				array('label'=>'Blog', 'url'=>array('/page/index/'), 'active'=>$homeIsActive),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			);			
		}
	}
}

?>