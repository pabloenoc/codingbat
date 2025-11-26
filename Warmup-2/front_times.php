<?php

/**  
 * Given a string and a non-negative int n,
 * we'll say that the front of the string is the first 3 chars,
 * or whatever is there if the string is less than length 3.
 * Return n copies of the front;
 */

function front_times(string $str, int $n)
{
    if (strlen($str) < 3) {
        return str_repeat($str, $n);
    } else {
        // only print up to 3...
        return str_repeat(substr($str, 0, 3), $n);
    }
}

var_dump(front_times("Chocolate", 2)); // 'ChoCho'
var_dump(front_times("Chocolate", 3)); // 'ChoChoCho'
var_dump(front_times("Abc", 3));       // 'AbcAbcAbc'
