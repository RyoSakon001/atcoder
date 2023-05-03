<?php

list($a, $b, $c, $d, $e, $f, $x) = explode(' ', trim(fgets(STDIN)));

$t = 0;
$takahashi = 0;
while ($t < $x) {
    if ($x - $t >= $a) {
        $takahashi += $a * $b;
        $t += $a + $c;
    } else {
        $takahashi += ($x - $t) * $b;
        $t += ($x - $t);
    }
}

$t = 0;
$aoki = 0;
while ($t < $x) {
    if ($x - $t >= $d) {
        $aoki += $d * $e;
        $t += $d + $f;
    } else {
        $aoki += ($x - $t) * $e;
        $t += ($x - $t);
    }
}

if ($takahashi > $aoki) {
    $winner = 'Takahashi';
} else if ($takahashi < $aoki) {
    $winner = 'Aoki';
} else {
    $winner = 'Draw';
}

echo $winner.PHP_EOL;