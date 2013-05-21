<?php

class CommentRenderer {

	public static function renderCreateView($commentController, $commentModel, $page_id, $page_title) {
		
		$commentController->render('create', array(
												'model' => $commentModel, 
												'page_id' => $page_id, 
												'page_title' => $page_title));
	}
	
	public static function renderCommentsForPage($commentController, $dataProvider, $page_id, $page_title) {
		
		$commentController->render('commentsForSpecificPage', array(
																'dataProvider' => $dataProvider, 
																'page_id' => $page_id, 
																'page_title' => $page_title));
	}

}

?>