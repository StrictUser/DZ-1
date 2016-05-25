<?php

	namespace Marvel\USA\NewYorkState\Elmsford;


	class HankPym
	{
		public static $mainInfo = 'My name is Dr. Henry Jonathan Pym more known as Hank Pym or Ant-Man/Giant-Man. I was born in 
		Elmsford, NY, USA.';

		public static function whoami()
		{
			return HankPym::$mainInfo;
		}
	}

	echo HankPym::whoami();