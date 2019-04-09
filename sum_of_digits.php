<?php

$n = 1234563;

$sum = 0;

do {
    $sum += $n % 10;
} while ($n /= 10);

echo $sum;