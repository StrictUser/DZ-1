<?php

	require __DIR__ . '/../vendor/autoload.php';

	class Greeting
	{
		use RandomQuote;

		public function say($name)
		{
			return "Hi, $name! There is a new quote for you: ".$this->getQuote();
		}
	}

	$a = new Greeting();
	echo $a->say('Vasya');