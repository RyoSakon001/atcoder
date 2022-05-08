<?php

$n = trim(fgets(STDIN));

$i = 0;
while ($i < $n) {
    $array[$i] = explode(' ', trim(fgets(STDIN)));
    $i++;
}

$i = 0; // 自分
$j = 0; // 比較相手
$flag['myoji'] = false;
$flag['name'] = false;

while ($i < $n) {
    while ($j < $n) {
        if (($i !== $j) && ($array[$i][0] === $array[$j][0] || $array[$i][0] === $array[$j][1])) { // 自分以外で、名字が相手と一致している
            $flag['myoji'] = true;
        }
        $j++;
    }
    $j = 0;
    while ($j < $n) {
        if (($i !== $j) && ($array[$i][1] === $array[$j][0] || $array[$i][1] === $array[$j][1])) { // 自分以外で、名字が相手と一致している
            $flag['name'] = true;
        }
        $j++;
    }
    $j = 0;

    if ($flag['myoji'] && $flag['name']) {
        echo 'No'.PHP_EOL;
        exit();
    }
    $i++;
}

echo 'Yes'.PHP_EOL;