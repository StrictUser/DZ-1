<?php

	namespace Marvel\USA\NewYorkState\LongIsland;


	class IronMan
	{
		public static $mainInfo = 'My name is Anthony Edward "Tony" Stark more known as Iron Man. I was born in 
		Long Island, NY, USA.';

		public static function whoami()
		{
			return IronMan::$mainInfo;
		}
	}

	echo IronMan::whoami();