<?php

list($n, $x, $y) = array_map("intval", explode(" ", trim(fgets(STDIN))));

$array = [$x, $y];
for ($i=2; $i<$n; $i++) {
    $array[$i] = ($array[$i-2] + $array[$i-1]) % 100;
}

echo $array[$n-1].PHP_EOL;