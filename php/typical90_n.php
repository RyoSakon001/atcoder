<?php

$n = trim(fgets(STDIN));
$A = array_map("intval", explode(" ", trim(fgets(STDIN))));
$B = array_map("intval", explode(" ", trim(fgets(STDIN))));
sort($A);
sort($B);
$d = 0;
for ($i=0; $i<$n; $i++) {
    $d += abs($A[$i]- $B[$i]);
}
echo $d.PHP_EOL;