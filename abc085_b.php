<?php

$n = trim(fgets(STDIN));

$i = 0;
while ($i < $n) {
    $array[$i] = trim(fgets(STDIN));
    $i++;
}

echo count(array_unique($array));

echo PHP_EOL;