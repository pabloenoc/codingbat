<?php

/**
* We have two monkeys, a and b, and the parameters a_smile and b_smile indicate 
* if each is smiling. We are in trouble if they are both smiling or if neither 
* of them is smiling. Return true if we are in trouble.
*
*/

function monkey_trouble(bool $a_smile, bool $b_smile) 
{
	return $a_smile === $b_smile;
}

var_dump(monkey_trouble(true, true)); // true
var_dump(monkey_trouble(false, false)); // true
var_dump(monkey_trouble(true, false)); // false

