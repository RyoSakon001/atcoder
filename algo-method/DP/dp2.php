<?php

$n = trim(fgets(STDIN));

$array = array_map("intval", explode(" ", trim(fgets(STDIN))));

$dp = array_fill(0, $n, 0);
$dp[1] = $array[1];

for ($i=2; $i<$n; $i++) { 
    $dp[$i] = min($dp[$i-1]+$array[$i], $dp[$i-2]+$array[$i]*2);
}

echo $dp[$n-1];
