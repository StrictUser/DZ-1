<?php

	namespace Marvel\USA\NewJerseyState\Paterson;


	class WonderMan
	{
		public static $mainInfo = 'My name is Simon Williams more known as Wonder Man. I was born in 
		Paterson, NJ, USA.';

		public static function whoami()
		{
			return WonderMan::$mainInfo;
		}
	}

	echo WonderMan::whoami();