<?php

// メモ：数学的思考を行うよりも、「コンピュータの力技で、強制的に全パターンを試す（全探索）」を意識する。

$a = intval(trim(fgets(STDIN)));
$b = intval(trim(fgets(STDIN)));
$c = intval(trim(fgets(STDIN)));
$x = intval(trim(fgets(STDIN)));

$pattern = 0;
$num_500 = 0;
$num_100 = 0;
$num_50 = 0;

while ($num_500 <= $a) {
    while ($num_100 <= $b) {
        while ($num_50 <= $c) {
            if (($num_500*500 + $num_100*100 + $num_50*50) === $x) $pattern++;
            $num_50++;
        }
        $num_50 = 0;
        $num_100++;
    }
    $num_50 = 0;
    $num_100 = 0;
    $num_500++;
}

echo $pattern;

echo PHP_EOL;

?>