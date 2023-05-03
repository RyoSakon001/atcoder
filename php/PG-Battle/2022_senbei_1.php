<?php

list($n, $q) = array_map("intval", explode(" ", trim(fgets(STDIN))));

for ($i=0; $i<$q; $i++) {
    $range_array[$i] = explode(' ', trim(fgets(STDIN))); 
}

$senbei_array = array_fill(1, $n, 0);

for ($i=0; $i<$q; $i++) {
    for ($j=$range_array[$i][0]; $j <= $range_array[$i][1]; $j++) { 
        $senbei_array[$j] = ($senbei_array[$j] + 1) % 2;
    }
}

$count = array_sum($senbei_array);
echo ($count.PHP_EOL);



