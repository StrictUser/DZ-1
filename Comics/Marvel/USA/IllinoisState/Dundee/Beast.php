<?php

	namespace Marvel\USA\IllinoisState\Dundee;


	class Beast
	{
		public static $mainInfo = 'My name is Henry Philip Hank McCoy more known as Beast. I was born in 
		Dundee, IL, USA.';

		public static function whoami()
		{
			return Beast::$mainInfo;
		}
	}

	echo Beast::whoami();