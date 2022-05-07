<?php

$n = trim(fgets(STDIN));
$power = 1;
for ($i=1; $i<=$n; $i++) {
    $power = $power * $i % 1000000007;
}

echo $power.PHP_EOL;