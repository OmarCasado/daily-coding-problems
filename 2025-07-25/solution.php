<?php

function mostFrequentNumber($input) {
    $count = [];
    foreach ($input as $number) {
        if (!isset($count[$number])) {
            $count[$number] = 1;
        } else {
            $count[$number]++;
        }
    }

    $maxCount = 0;
    $mostFrequent = [];

    foreach ($count as $number => $freq) {
        if ($freq > $maxCount) {
            $maxCount = $freq;
            $mostFrequent = [$number];
        } elseif ($freq == $maxCount) {
            $mostFrequent[] = $number;
        }
    }

    return min($mostFrequent);
}
