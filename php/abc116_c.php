<?php

$n = trim(fgets(STDIN));
$array = array_map("intval", explode(" ", trim(fgets(STDIN))));
$array[] = 0;
$count = 0;

while (count($array) != 0) {
    if ($array[0] == 0) {
        unset($array[0]);
        $array = array_merge($array);
    } else {
        $zero = array_search(0, $array);
        $min = min(array_slice($array, 0, $zero));
    
        for ($i=0; $i<$zero; $i++) {
            $array[$i] -= $min;
        }
        $count += $min;
    }
}

echo $count.PHP_EOL;