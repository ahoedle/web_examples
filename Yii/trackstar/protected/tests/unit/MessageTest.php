<?php
class MessageTest extends CTestCase {

	public function testRepeat() {
		$message = new MessageController('messageTest');
		$returnedMessage = $message->repeat($yell);
		$this->assertEquals($returnedMessage, $yell);	
	}

}
?>