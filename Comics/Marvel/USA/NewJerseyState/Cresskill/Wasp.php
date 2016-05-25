<?php

	namespace Marvel\USA\NewJerseyState\Cresskill;


	class Wasp
	{
		public static $mainInfo = 'My name is Janet van Dyne more known as Wasp. I was born in 
		Cresskill, NJ, USA.';

		public static function whoami()
		{
			return Wasp::$mainInfo;
		}
	}

	echo Wasp::whoami();