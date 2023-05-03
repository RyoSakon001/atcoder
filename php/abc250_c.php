<?php

list($n, $q) = array_map("intval", explode(" ", trim(fgets(STDIN))));
for ($i=1; $i<=$n; $i++) {
    $array[$i] = $i; // ボールの並び
    $place[$i] = $i; // key番号が書かれた数値がある場所
}
for ($i=0; $i<$q; $i++) {
    $replace[$i] = trim(fgets(STDIN)); // 入れ替える対象の数字
}
$max_size = count($array);

for ($i=0; $i<$q; $i++) {

    $key = $place[$replace[$i]]; // key番目に対象のボールがある
    if ($key == $max_size) {
        // 右はじだったら、左と交換
        $tmp = $array[$key];
        $array[$key] = $array[$key-1];
        $array[$key-1] = $tmp;
        $place[$array[$key]]++;
        $place[$array[$key-1]]--;
    } else {
        $tmp = $array[$key];
        $array[$key] = $array[$key+1];
        $array[$key+1] = $tmp;
        $place[$array[$key]]--;
        $place[$array[$key+1]]++;
    }
}

$answer = implode(' ', $array);
echo $answer;