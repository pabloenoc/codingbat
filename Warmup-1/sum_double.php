<?php

/**
*
* sum_double
*
* Give two int values, return their sum. Unless the two values are the same,
* then return double their sum.
*/

function sum_double(int $a, int $b) 
{
	if ($a === $b) {
		return 2 * ($a + $b);
	} else {
		return ($a + $b);
	}
}

var_dump(sum_double(1, 2)); // 3
var_dump(sum_double(3, 2)); // 5
var_dump(sum_double(2, 2)); // 8