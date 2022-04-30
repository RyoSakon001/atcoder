<?php

$n = trim(fgets(STDIN));

list($a, $b) = array_map("intval", explode(" ", trim(fgets(STDIN))));

$array = array_map("intval", explode(" ", trim(fgets(STDIN))));

for ($i=0; $i<$n; $i++) {
    $array[$i] = explode(' ', trim(fgets(STDIN)));
}


$answer = '';
echo $answer.PHP_EOL;