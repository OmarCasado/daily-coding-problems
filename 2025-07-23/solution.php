<?php

function countPrimes($n) {
    $count = 0;

    for ($val = 2; $val < $n; $val++) {
        $divisors = 0;

        for ($i = 1; $i <= $val; $i++) {
            if ($val % $i == 0) {
                $divisors++;
            }
        }

        if ($divisors == 2) {
            $count++;
        }
    }

    return $count;
}
