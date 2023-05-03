<?php

$array = array_unique(array_map("intval", explode(" ", trim(fgets(STDIN)))));

$count=0;

foreach ($array as $value) {
    if (is_int($value)) $count++;
}

echo $count.PHP_EOL;