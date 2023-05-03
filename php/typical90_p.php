<?php

$N = trim(fgets(STDIN));

$values = array_map("intval", explode(" ", trim(fgets(STDIN))));
sort($values);
list($a, $b, $c) = $values;

$max = 9999;
$answer = $max;
for ($i=0; $i<=$max; $i++) {
    $x = $N - $a*$i; // 短縮ポイント
    for ($j=0; $j<=($max-$i); $j++) {
        $k = ($x - $b*$j) / $c;
        if (is_int($k) && $k>=0) {
            $answer = min($answer, ($i + $j + $k));
        }
    }
}
echo $answer.PHP_EOL;