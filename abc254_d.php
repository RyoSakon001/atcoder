<?php

// タイムオーバー
$n = trim(fgets(STDIN));

$count = 0;
for ($i=1; $i<=$n; $i++) {
    for ($j=1; $j<=$n; $j++) {
        $num = sqrt($i*$j);
        if ($num == floor($num)) $count++;
    }
}

echo $count.PHP_EOL;