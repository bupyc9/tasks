<?php

function binarySearch($needle, array $haystack) {
    $left = 0;
    $right = count($haystack) - 1;

    while ($left <= $right) {
        $middle = (int)floor(($left + $right) / 2);

        if ($haystack[$middle] === $needle) {
            return $middle;
        }

        if ($haystack[$middle] > $needle) {
            $right = $middle - 1;
        } else {
            $left = $middle + 1;
        }
    }

    return null;
}

$haystack = [-1, 7, 3, 5, 4, 6, 2, 8];
sort($haystack);

echo binarySearch(-1, $haystack);