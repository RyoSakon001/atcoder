<?php

list($n, $k) = explode(' ', trim(fgets(STDIN)));
$cost_list = explode(' ', trim(fgets(STDIN)));

for ($i=0; $i<$k; $i++) {
    $dp[$i] = abs($cost_list[$i] - $cost_list[0]);
}

for ($i=$k; $i<$n; $i++) {
    for ($j=0; $j<$k; $j++) {
        $tmp_values[$j] = $dp[$i-$k+$j] + abs($cost_list[$i] - $cost_list[$i-$k+$j]);
    }
    $dp[$i] = min($tmp_values);
}
echo $dp[$n-1].PHP_EOL;