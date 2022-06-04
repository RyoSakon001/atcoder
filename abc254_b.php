<?php

$n = trim(fgets(STDIN));

for ($i=0; $i<$n; $i++) {
    $array[$i] = array_fill(0, $n, 0);
    $array[$i][0] = 1;
}

for ($i=1; $i<$n; $i++) {
    for ($j=1; $j<$n; $j++) {
        $array[$i][$j] = $array[$i-1][$j-1] + $array[$i-1][$j];
    }
}

for ($i=0; $i<$n; $i++) {
    for ($j=0; $j<$n; $j++) {
        if ($array[$i][$j] == 0) unset($array[$i][$j]);
    }
}

for ($i=0; $i<$n; $i++) {
    echo implode(' ', $array[$i])."\n";
}