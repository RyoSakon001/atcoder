<?php

list($h, $w) = array_map("intval", explode(" ", trim(fgets(STDIN))));

for ($i=0; $i<$h; $i++) {
    $array[$i] = explode(' ', trim(fgets(STDIN)));
    $sum[$i] = array_sum($array[$i]);
}

for ($j=0; $j<$w; $j++) {
    $goukei[$j] = array_sum(array_column($array, $j));
}

for ($i=0; $i<$h; $i++) {
    for ($j=0; $j<$w; $j++) {
        $answer[$i][$j] = $sum[$i] + $goukei[$j] - $array[$i][$j];
    }
}

for ($i=0; $i<$h; $i++) {
    echo implode(' ', $answer[$i])."\n";
}