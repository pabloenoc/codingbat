<?php

/**
 * We have a loud talking parrot. The "hour" parameter is the current hour
 * time in the range 0..23. We are in trouble if the parrot is talking and
 * the hour is before 7 or after 20.
 * Return true if we are in trouble.
 *
 **/


function parrot_trouble(bool $talking, int $hour)
{
    if ($talking && ($hour < 7 || $hour > 20)) {
        return true;
    } else {
        return false;
    }
}

var_dump(parrot_trouble(true, 6)); // true
var_dump(parrot_trouble(true, 7)); // false
var_dump(parrot_trouble(false, 6)); // false
