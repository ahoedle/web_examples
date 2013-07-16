<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{

	private $_id;
	private $_name;
	
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
/*
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->email]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
*/
		// Understand that email === username
		//$user = User::model()->findByAttributes(array('email'=>$this->username));
		
		$user = User::model()->findByAttributes(array('email'=>$this->username));
		
		if ($user === null) {
		    // No user found!
		    $this->errorCode=self::ERROR_USERNAME_INVALID;
/* 		} else if ($user->pass !== hash_hmac('sha256', $this->password, Yii::app()->params['encryptionKey']) ) { */
		} else if ($user->pass !== $this->password) {
		    // Invalid password!
		    $this->errorCode=self::ERROR_PASSWORD_INVALID;
		} else { // Okay!
		    $this->errorCode=self::ERROR_NONE;
		    $this->setState('type', $user->type); // access the user's type value via Yii::app()->user->type
		    $this->_id = $user->id;
		    $this->_name = $user->username;
		    
		    $auth = Yii::app()->authManager;
		    if (!$auth->isAssigned($user->type, $user->id)) {
				if ($auth->assign($user->type, $user->id)) {
					Yii::app()->authManager->save();
				} 
			}
		}
		return !$this->errorCode;
	}
	
	public function getId() {
		return $this->_id;
	}
	
	public function getName() {
		return $this->_name;
	}
}