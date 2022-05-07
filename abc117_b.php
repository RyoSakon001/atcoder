<?php

$n = trim(fgets(STDIN));
$array = array_map("intval", explode(" ", trim(fgets(STDIN))));
rsort($array);

$longest = $array[0];
unset($array[0]);
$others = array_sum($array);

if ($longest < $others) {
    $answer = 'Yes';
} else {
    $answer = 'No';
}

echo $answer.PHP_EOL;