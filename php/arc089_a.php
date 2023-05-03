<?php

$n = trim(fgets(STDIN));

$array[0] = [0, 0, 0];
$i = 1;
while ($i <= $n) {
    $array[$i] = explode(' ', trim(fgets(STDIN)));
    $i++;
}

$i = 0;
while ($i < $n) {
    $distance = abs(($array[$i + 1][1] - $array[$i][1])) + abs(($array[$i + 1][2] - $array[$i][2]));
    $time_required = ($array[$i + 1][0] - $array[$i][0]);
    if (($distance > $time_required) || (($time_required - $distance) % 2 === 1)) { // ぴったり到着しなくてはならない
        echo 'No'.PHP_EOL;
        exit();
    }
    $i++;
}

echo 'Yes'.PHP_EOL;