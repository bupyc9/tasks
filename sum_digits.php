<?php

function sum_digits(int $number) {
    $sum = 0;

    do {
        $sum += $number % 10;
    } while ($number /= 10);

    return $sum;
}


$n = 1234563;

echo sum_digits($n);