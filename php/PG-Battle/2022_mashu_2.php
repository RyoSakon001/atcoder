<?php

$n = trim(fgets(STDIN));
$array = explode("=", trim(fgets(STDIN)));

$sum_array = [];
foreach ($array as $key => $val) {
    $val = trim($val); // 両端の空白を削除
    $val = str_replace(' + ', ' ', $val);
    $val = explode(' ', $val);
    $sum_array[] = array_sum($val);
}

if (count(array_unique($sum_array)) == 1) {
    echo 'Yes';
} else {
    echo 'No';
}

