<?php

class QuoteController extends Controller {
	
	private $quotes = array(
		array('Wer seine Meinung nie zurückzieht, liebt sich selbst mehr als die Wahrheit.', 'Joseph Joubert'),
		array('Viele Menschen würden eher sterben als denken. Und in der Tat: Sie tun es.', 'Bertrand Russell'),
		array('Der Undank ist immer eine Art Schwäche. Ich habe nie gesehen, dass tüchtige Menschen undankbar gewesen wären.', 'Johann Wolfgang von Goethe'),
		array('Der Weg des Geistes ist der Umweg.', 'Georg Wilhelm Friedrich Hegel'),
	);
	
	function filters() {
		return array('ajaxOnly + getQuote',); // can't use the getQuote action directly --> 400 Bad Request HTTP error
	}
	
	private function getRandomQuote() {
		return $this->quotes[array_rand($this->quotes)];
	}
	
	function actionIndex() {
		$this->render('index', array('quote' => $this->getRandomQuote()));
	}
	
	function actionGetQuote() {
		$this->renderPartial('_quote', array('quote' => $this->getRandomQuote()));
	}
}