<?php

// $repeatを入れてタイムオーバー。さかのぼってsort出来ないようになっている。
list($n, $k) = array_map("intval", explode(" ", trim(fgets(STDIN))));
$array = explode(' ', trim(fgets(STDIN)));

// $repeat = true;
while ($repeat) {
    // $repeat = false;
    for ($i=0; $i<($n-$k); $i++) {
        if ($array[$i] > $array[$i+$k]) {
            // $repeat = true;
            $tmp = $array[$i];
            $array[$i] = $array[$i+$k];
            $array[$i+$k] = $tmp;
        }
    }
}

$is_sorted = true;
$i=0;
for ($i=0; $i<$n; $i++) {
    if (!isset($array[$i+1])) continue;

    if ($array[$i] > $array[$i+1]) {
        $is_sorted= false;
        break;
    }
}

$answer = ($is_sorted)? 'Yes' : 'No';
echo $answer.PHP_EOL;