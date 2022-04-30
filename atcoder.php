<?php

for ($i=1; $i<=1000000; $i++) {
    $seki[$i] = $i;
    $kaisuu[$i] = 0;
    for ($j=1; $j<=5; $j++) {
        $seki[$i] = get_seki($seki[$i]);
        if (strlen($seki[$i]) == 1) {
            $kaisuu[$i] = $j;
            $j = 6;
        }
    }
}

$answer = 0;
for ($k=1; $k<=1000000; $k++) {
    if ($kaisuu[$k] == 5) $answer++;
}
echo $answer;

function get_seki($i) {
    $array = str_split($i);
    return array_product($array);
}