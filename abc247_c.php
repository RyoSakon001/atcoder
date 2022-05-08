<?php

$n = trim(fgets(STDIN));

$answer = get_sequence($n);

echo $answer.PHP_EOL;

function get_sequence($n) {
    if ($n == '1') return '1';
    return get_sequence($n-1).' '.$n.' '.get_sequence($n-1);
}