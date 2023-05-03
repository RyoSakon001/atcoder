<?php

list($a, $b, $c, $d) = array_map("intval", explode(" ", trim(fgets(STDIN))));

$Takahashi = $a * 3600 + $b * 60;
$Aoki = $c * 3600 + $d * 60 + 1;

if ($Takahashi < $Aoki) {
    echo 'Takahashi'.PHP_EOL;
} else {
    echo 'Aoki'.PHP_EOL;
}