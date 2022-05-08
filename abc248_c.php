<?php

list($n, $m, $k) = explode(' ', trim(fgets(STDIN)));

$array = array_fill(0, $n, 1);
$pattern = 0;

while (array_sum($array) <= $n * $m && count($array) == $n) {
    if (array_sum($array) <= $k) $pattern++;
    $array = get_next_array($array, $m);
}

$remainder = $pattern % 998244353;
echo $remainder.PHP_EOL;

function get_next_array ($array, $m) {

    $i = 0;
    while ($i < count($array)) {
        if ($array[$i] != $m) break;
        $i++;
    }

    if (!isset($array[$i])) {
        $array[$i] = 1;
    } else {
        $array[$i]++;
    }

    for ($j = 0; $j < $i; $j++) {
        $array[$j] = 1;
    }
    
    return $array;
}