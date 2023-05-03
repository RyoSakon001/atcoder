<?php

$n = trim(fgets(STDIN));

$cost_list = explode(' ', trim(fgets(STDIN)));

$dp[0] = 0;
$dp[1] = abs($cost_list[1] - $cost_list[0]);

for ($i=2; $i<$n; $i++) {
    $values['take_2steps'] = $dp[$i-2] + abs($cost_list[$i] - $cost_list[$i-2]);
    $values['take_1steps'] = $dp[$i-1] + abs($cost_list[$i] - $cost_list[$i-1]);
    $dp[$i] = min($values);
}

echo $dp[$n-1].PHP_EOL;