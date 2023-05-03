<?php

list($n, $p, $q) = array_map("intval", explode(" ", trim(fgets(STDIN))));

for ($i=0; $i<$n; $i++) {
    $point_array[$i] = explode(' ', trim(fgets(STDIN)));
    $score_array[$i] = $p * $point_array[$i][0] + $q * $point_array[$i][1];
}

arsort($score_array);

$rank = 0;
$previous_score = null;

foreach ($score_array as $key => $score) {
    if ($previous_score != $score) $rank++;
    $rank_array[$key] = $rank;
    $previous_score = $score; // 次の人と同点かどうかを判定するのに使う
}

ksort($rank_array);

foreach ($rank_array as $rank) {
    echo $rank.PHP_EOL;
}