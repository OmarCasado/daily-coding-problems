<?php

function countChar($string, $char) {

	if(strlen($string) < 1) {
		return 0;
	}

	if($string[0] == $char) {
		return 1 + countChar(substr($string, 1), $char);
	}

	return countChar(substr($string, 1), $char);
}