<?php

function reverseString($string) {

	if(strlen($string) == 0) {
		return;
	}

	$last = substr($string, strlen($string) - 1);
	$newStr = substr($string, 0, strlen($string) - 1);
	echo $last;

	return reverseString($newStr);
}