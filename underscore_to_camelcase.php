<?php

function underScoreToCamelCase(string $str): string {
    $str = str_replace('_', ' ', $str);
    $str = ucwords(strtolower($str));
    $str = str_replace(' ', '', $str);
    $str = lcfirst($str);

    return $str;
}

echo underScoreToCamelCase('under_score');