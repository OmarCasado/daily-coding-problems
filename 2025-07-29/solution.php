<?php

function sumDigits($n) {
    if ($n < 10) {
        return $n;
    }

    return ($n % 10) + sumDigits(intdiv($n, 10));
}