<?php	
	
class CommentNavigator {

	public static function redirectTo_ViewCommentsForPage($commentController, $pageID) {
		$commentController->redirect(array('viewCommentsFromPage','pageID'=>$pageID));
	}	
	
}		
?>