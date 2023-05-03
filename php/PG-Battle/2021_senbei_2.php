<?php

$t = trim(fgets(STDIN));

for ($i=0; $i<$t; $i++) {
    // 0:n 1:m
    $array[$i] = explode(' ', trim(fgets(STDIN)));
}

$time_start = microtime(true);

$answer_array = '';
for ($i=0; $i<$t; $i++) {
    echo $answer_array[$i][0].' '.$answer_array[$i][1].PHP_EOL;
}





$time = microtime(true) - $time_start;
echo "\n{$time}";