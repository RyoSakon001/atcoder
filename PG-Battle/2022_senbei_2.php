<?php

$time_start = microtime(true);

$n = trim(fgets(STDIN));
$hardness_array = array_map("intval", explode(" ", trim(fgets(STDIN))));

asort($hardness_array);
$senbei_array = array_slice($hardness_array, $n, $n, true);

ksort($senbei_array);

foreach ($senbei_array as $key => $val) {
    echo ($key+1)."\n";
}

$time = microtime(true) - $time_start;
echo "\n{$time}";
