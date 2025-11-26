<?php
/**
* 
* The parameter weekday is True if it is a weekday, and the parameter vacation 
* is True if we are on vacation. We sleep in if it is not a weekday or we're on vacation. 
* Return True if we sleep in.
*
*/

function sleep_in(bool $weekday, bool $vacation)
{
	if (!$weekday || $vacation) {
		return True;
	} else {
		return False;
	}
}

// Test out our function

var_dump(sleep_in(false, false)); // true

var_dump(sleep_in(true, false)); // false

var_dump(sleep_in(false, true)); // true

var_dump(sleep_in(true, true)); // true