<?php

$n = trim(fgets(STDIN));

list($a, $b) = array_map("intval", explode(" ", trim(fgets(STDIN))));

$array = array_map("intval", explode(" ", trim(fgets(STDIN))));

for ($i=0; $i<$n; $i++) {
    $array[$i] = explode(' ', trim(fgets(STDIN)));
}

$time_start = microtime(true);

$answer = '';
echo $answer.PHP_EOL;




$time = microtime(true) - $time_start;
echo "\n{$time}";