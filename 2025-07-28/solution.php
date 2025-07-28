<?php

function countDown($n) {
    if ($n < 1) {
        echo "$n is not a valid number.\n";
        return;
    }

    echo $n . "\n";

    if ($n > 1) {
        countDown($n - 1);
    }
}