<?php

list($a, $b, $c) = array_map("intval", explode(" ", trim(fgets(STDIN))));

$array[] = $a;
$array[] = $b;
$array[] = $c;

sort($array);

if ($array[1] == $b) {
    echo "Yes\n";
} else {
    echo "No\n";
}
