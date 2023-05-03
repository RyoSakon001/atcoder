<?php

$n = trim(fgets(STDIN));

for ($i=0; $i<$n; $i++) {
    $array[$i] = str_split(trim(fgets(STDIN)));
}

$duplicate_count = array_fill(0, 10, 1);
$total_count = array_fill(0, 10, 0);

// 0~9までの数字の、ダブり回数を計算する
for ($k=0; $k<=9; $k++) { // 0~9の数値
    for ($j=0; $j<=9; $j++) { // 左から0~9番目
        $duplicate_count_tmp = 0;
        for ($i=0; $i<$n; $i++) {
            // 左から$j=0番目において、数字の$k=0が出てくる個数を数え、$duplicate_count[$j]に記録。
            if ($array[$i][$j] == $k) {
                $duplicate_count_tmp++;
                $total_count[$k]++;
            } 
        }
        if ($duplicate_count[$k] < $duplicate_count_tmp) {
            $duplicate_count[$k] = $duplicate_count_tmp;
            $last_column[$k] = $j;
        }
        if ($total_count[$k] == $n) {
            if (!isset($last_column[$k])) $last_column[$k] = $j;
            $time[$k] = ($duplicate_count[$k] - 1) * 10 + $last_column[$k];
            continue 2;
        }
    }
}

echo min($time).PHP_EOL;