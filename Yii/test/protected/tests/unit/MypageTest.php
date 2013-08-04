<?php
 
Yii::import('application.controllers.KursController');
class MypageTest extends CTestCase
{
    public function testRepeat()
    {
        $mypage = new KursController('this can be anystring');
        $yell = "hello any body out there";
        $returnedMessage=$mypage->repeat($yell);
        $this->assertEquals($returnedMessage, $yell);
    }
     
    public function testConcat()
    {
        $mypage = new KursController('this can be any string');
        $answer = $mypage->concat('joe','blogs');
        $this->assertEquals($answer, 'joe blogs');
    }
}
?>
