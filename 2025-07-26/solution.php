<?php

function isCleanPalindrome($input) {
    $tmp = str_split($input);
    $str = strtolower(implode($tmp));

    $patterns = ['/á/', '/é/', '/í/', '/ó/', '/ú/'];
    $replacements = ['a', 'e', 'i', 'o', 'u'];

    $str = preg_replace($patterns, $replacements, $str);
    $arr = str_split($str);
    $cleanStr = "";

    foreach($arr as $char) {
        if(ctype_alpha($char) == true) {
            $cleanStr .= $char;
        }
    }

    if($cleanStr == strrev($cleanStr)) {
        return "true";
    } else {
        return "false";
    }

    }