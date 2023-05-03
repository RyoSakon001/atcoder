<?php

$n = trim(fgets(STDIN));
for ($i=0; $i<$n; $i++) {
    $array[$i+1] = trim(fgets(STDIN));
}

$array = array_unique($array);
foreach ($array as $key => $val) {
    echo $key."\n";
}