<?php

$n = trim(fgets(STDIN));
$array = explode(' ', trim(fgets(STDIN)));
rsort($array);

$i = 0;
$sum_alice = 0;
$sum_bob = 0;

while ($i < $n) {
    if ($i % 2 === 0) {
        $sum_alice += $array[$i];
    } else {
        $sum_bob += $array[$i];
    }
    $i++;
}

echo $sum_alice - $sum_bob;

echo PHP_EOL;