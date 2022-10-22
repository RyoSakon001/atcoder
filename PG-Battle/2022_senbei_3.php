<?php

$n = trim(fgets(STDIN));
$array = array_map("intval", explode(" ", trim(fgets(STDIN))));

if (count($array) == 1) {
    if ($array[0] == 1) echo 0;
    echo $array[0];
    exit();
} 

while (true) {
    $one_index = array_search(1, $array);
    if ($one_index === false) break;
    // まず1要素削除は確定
    $delete_range = 1;
    // 開始位置
    $i = $one_index;
    while (true) {
        // 隣が範囲+1なら、範囲を広げる
        if ($array[$i+1] == $delete_range + 1) {
            $delete_range++;
        } else {
            break;
        }
        $i++;
    }
    array_splice($array, $one_index, $delete_range);
    $array = array_merge($array);
}

$answer = array_sum($array);
echo $answer.PHP_EOL;