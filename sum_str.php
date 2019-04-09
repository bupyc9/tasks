<?php

function sum_str($str)
{
    [$s1, $s2] = explode(' ', $str);
    $l1 = strlen($s1);
    $l2 = strlen($s2);

    $result = '';
    $rest = 0;

    $max = max($l1, $l2) + 1;

    for ($i = 1; $i <= $max; ++$i) {
        $d1 = $s1[$l1 - $i] ?? 0;
        $d2 = $s2[$l2 - $i] ?? 0;

        $sum = $d1 + $d2 + $rest;
        $rest = (int)($sum > 9);

        $result .= $sum % 10;
    }

    return strrev(rtrim($result, '0'));
}

echo sum_str('899797897778977878979878978798 1231231231231231312312321321443412321312312');