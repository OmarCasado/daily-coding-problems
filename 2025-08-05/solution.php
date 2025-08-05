<?php

function findMax($array) {

	if(count($array) == 1) {
		return $array[0];
	}

	if($array[0] > findMax(array_slice($array, 1))) {
		return $array[0];
	} else {
		return findMax(array_slice($array, 1));
	}
}