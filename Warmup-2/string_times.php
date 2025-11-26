<?php

/**
* 
* string_times
*
* Given a string and a non-negative int n, return a larger string that is n
* copies of the original string
*/

// today we discovered str_repeat()

function string_times(string $str, int $n)
{
	$output = "";
	for ($n; $n > 0; $n--) {
		$output .= $str;
	}
	return $output;
}

var_dump(string_times("Hi", 3));
var_dump(string_times("Pablo", 2));
var_dump(string_times("Elias", 10));