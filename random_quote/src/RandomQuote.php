<?php
	trait RandomQuote
	{
		public $qoutes = array(
			'I praise loudly. I blame softly.',
			'You cannot step into the same river twice.',
			'True artists are almost the only men who do their work for pleasure.',
			'It is easier to go down a hill than up, but the view is from the top.',
			'Success is getting what you want. Happiness is wanting what you get.',
			'A good garden may have some weeds.',
			'Love is not only something you feel, it is something you do.',
			'Just remember, once you\'re over the hill you begin to pick up speed.',
			'Don\'t cry because it\'s over, smile because it happened.',
			'Be yourself; everyone else is already taken.',
			'Two things are infinite: the universe and human stupidity; and I\'m not sure about the universe.'
		);

		public function getQuote(){
			$i = random_int(0, count($this->qoutes));

			return $this->qoutes[$i];
		}
	}