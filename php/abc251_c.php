<?php

// 計算時間OK版
$n = trim(fgets(STDIN));

$array_str = [];
$array_score = [];
for ($i=1; $i<=$n; $i++) {
    list($array_str[$i], $array_score[$i]) = explode(' ', trim(fgets(STDIN)));
}

$array_str = array_unique($array_str);

for ($i=1; $i<=$n; $i++) {
    if (!isset($array_str[$i])) unset ($array_score[$i]);
}

$array_score = array_unique($array_score);
$max = max($array_score);
$answer = array_search($max, $array_score);

echo $answer.PHP_EOL;

// 計算時間オーバー版
// $n = trim(fgets(STDIN));

// $array_str = [];
// $max_score = 0;
// for ($i=1; $i<=$n; $i++) {
//     list($tmpStr, $tmpScore) = explode(' ', trim(fgets(STDIN)));
//     if(!in_array($tmpStr, $array_str)){
//         $array_str[$i] = $tmpStr;
//         if ($tmpScore > $max_score) {
//             $max_score = $tmpScore;
//             $winner = $i;
//         }
//     }
// }

// echo $winner.PHP_EOL;