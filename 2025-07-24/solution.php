<?php

function groupWordsByLetter($input) {
    $result = [];

    foreach($input as $val) {
        $result[strtolower($val[0])] = [];
    }

    foreach($input as $value) {
        foreach($result as $k => $v) {
            $lowerCase = strtolower($value[0]);

            if($lowerCase == $k) {
                $result[$k][] = $value;
            }
        }
    }
    return $result;
    }