<?php

list($n, $k) = array_map("intval", explode(" ", trim(fgets(STDIN))));

$A = array_map("intval", explode(" ", trim(fgets(STDIN))));
$B = array_map("intval", explode(" ", trim(fgets(STDIN))));

$d_sum = 0;
for ($i=0; $i<$n; $i++) {
    $d_sum += abs($A[$i] - $B[$i]);
}

if ($k >= $d_sum && ($k - $d_sum) % 2 == 0) {
    $answer = 'Yes';
} else {
    $answer = 'No';
}
echo $answer.PHP_EOL;