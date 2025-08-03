<?php

function sumArray($array) {

	if(empty($array) == TRUE) {
		return 0;
	}

	return $array[0] + sumArray(array_slice($array, 1));
}