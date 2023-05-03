<?php

list($total, $yen) = explode(' ', trim(fgets(STDIN)));

$num_10000 = 0;
$num_5000 = 0;

while ($num_10000 <= $total) {
    while ($num_5000 <= ($total - $num_10000)) {
        $num_1000 = $total - $num_10000 - $num_5000;
        if (($num_10000*10000 + $num_5000*5000 + $num_1000*1000) == $yen) {
            echo $num_10000.' '.$num_5000.' '.$num_1000;
            exit(PHP_EOL);
        }
        $num_5000++;
    }
    $num_5000 = 0;
    $num_10000++;
}

echo '-1 -1 -1';

echo PHP_EOL;