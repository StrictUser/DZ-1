<?php

	require __DIR__ . '/../vendor/autoload.php';

	class Application
	{
		use RandomQuote;
		
		public function run()
		{
			echo $this->getQuote();
		}
	}

	$quote = new Application();
	$quote->run();