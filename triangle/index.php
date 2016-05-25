<?php

	/**
	 * Yields the triangle integers
	 *
	 * @param int $start
	 *
	 * @param int $finish
	 */

	function getTriangleInt($start, $finish)
	{
		while ($start < $finish)
		{
			yield ($start * ($start + 1))/2;
			$start++;
		}
	}

	foreach (getTriangleInt(0, 15) as $triangleInt)
	{
		echo $triangleInt . '\n';
	}