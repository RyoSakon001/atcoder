<?php

list($n, $p, $q) = array_map("intval", explode(" ", trim(fgets(STDIN))));

$array_tmp = array_map("intval", explode(" ", trim(fgets(STDIN))));

$time_start = microtime(true);

for ($i=0; $i<$n; $i++) {
    if ($array_tmp[$i] % $p != 0) $array[] = $array[$i];
}




$answer = '';
echo $answer.PHP_EOL;




$time = microtime(true) - $time_start;
echo "\n{$time}";