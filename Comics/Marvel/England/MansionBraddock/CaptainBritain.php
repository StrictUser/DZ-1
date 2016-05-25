<?php

	namespace Marvel\England\MansionBraddock;


	class CaptainBritain
	{
		public static $mainInfo = 'My name is Brian Braddock more known as Captain Britain. I was born in 
		The mansion Braddock, England.';

		public static function whoami()
		{
			return CaptainBritain::$mainInfo;
		}
	}

	echo CaptainBritain::whoami();