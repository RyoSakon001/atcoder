<?php

list($n, $w) = array_map("intval", explode(" ", trim(fgets(STDIN))));

$array = array_map("intval", explode(" ", trim(fgets(STDIN))));

$time_start = microtime(true);

$answer_array = [];

for ($i=0; $i<$n; $i++) {
    if ($array[$i] <= $w) $answer_array[] = $array[$i];
}

if ($n >= 2) {
    for ($i=0; $i<$n; $i++) {
        for ($j=0; $j<$i; $j++) {
        if ($array[$i] + $array[$j] <= $w) $answer_array[] = $array[$i] + $array[$j];
        }
    }
}

if ($n >= 3) {
    for ($i=0; $i<$n; $i++) {
        for ($j=0; $j<$i; $j++) {
            for ($k=0; $k<$j; $k++) {
                if ($array[$i] + $array[$j] + $array[$k] <= $w) $answer_array[] = $array[$i] + $array[$j] + $array[$k];
            }
        }
    }
}

$answer_array = array_unique($answer_array);

echo count($answer_array)."\n";




$time = microtime(true) - $time_start;
echo "\n{$time}";