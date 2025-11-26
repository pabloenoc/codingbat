<?php

/**
* 
* Given a string name, e.g. "Bob", return a greeting 
* of the form "Hello Bob!".
*
*/

function hello_name(string $name)
{
	return "Hello $name!";
}

echo hello_name('Bob');
echo hello_name('Alice');
echo hello_name('X');