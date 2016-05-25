<?php

	namespace Marvel\Asgard\Asgard;


	class Thor
	{
		public static $mainInfo = 'My name is Dr. Donald Blake more known as Thor. I was born in 
		Asgard - one of The Nine Worlds. I am Asgard\'s king.';

		public static function whoami()
		{
			return Thor::$mainInfo;
		}
	}

	echo Thor::whoami();