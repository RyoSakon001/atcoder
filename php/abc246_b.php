<?php

list($A, $B) = array_map("intval", explode(" ", trim(fgets(STDIN))));

$d = pow(pow($A, 2) + pow($B, 2), 0.5);
$a = $A / $d;
$b = $B / $d;
echo $a.' '.$b.PHP_EOL;

