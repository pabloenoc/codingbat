<?php
/**
 *
 * Given an int n, return the absolute difference between n and 21, except return
 * double the absolute difference if n is over 21
 */

function diff21(int $n)
{
    if ($n > 21) {
        return 2 * abs($n - 21);
    } else {
        return abs($n - 21);
    }
}

var_dump(diff21(19)); // 2
var_dump(diff21(10)); // 11
var_dump(diff21(21)); // 0

