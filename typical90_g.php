<?php

$n = trim(fgets(STDIN));
$A = array_map("intval", explode(" ", trim(fgets(STDIN))));
sort($A);
$q = trim(fgets(STDIN));
for ($i=0; $i<$q; $i++) {
    $B[$i] = intval(trim(fgets(STDIN)));
}

if ($n == 1) {
    for ($i=0; $i<$q; $i++) {
        $answer = abs($B[$i] - $A[0]);
       echo $answer."\n";
    }
    exit();
}

for ($i=0; $i<$q; $i++) {
    $left = 0;
    $right = $n-1;
    $mid = ceil(($left + $right)/2);
    while (true) {
        $mid = ceil(($left + $right)/2);
        if ($mid == 0) {
            $answer = min(abs($B[$i] - $A[0]), abs($B[$i] - $A[1]));
            break;
        } else if ($mid == $n) {
            $answer = min(abs($B[$i] - $A[$n-1]), abs($B[$i] - $A[$n-2]));
            break;
        }
    
        if ($B[$i] >= $A[$mid-1] && $B[$i] <= $A[$mid]) {
            $answer = min(abs($B[$i] - $A[$mid-1]), abs($B[$i] - $A[$mid]));
            break;
        } else if ($B[$i] < $A[$mid-1]) {
            $right = $mid - 2;
        } else if ($B[$i] > $A[$mid]) {
            $left = $mid + 1;
        }
    }
    echo $answer."\n";
}