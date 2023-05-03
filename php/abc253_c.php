<?php
$query_quantity = trim(fgets(STDIN));
$answer = '';
$index = []; // keyの数値の要素数
$nums = []; // 集合に存在する数値の種類
$max = 0;
$min = PHP_INT_MAX;

for ($i=0; $i<$query_quantity; $i++) {
    $q = explode(' ', trim(fgets(STDIN)));
    switch ($q[0]) {
        case 1:
            if (isset($index[$q[1]])) {
                $index[$q[1]]++; 
            } else {
                $index[$q[1]] = 1;
                $nums[$q[1]] = $q[1];
                $max = max($max, $q[1]);
                $min = min($min, $q[1]);
            }
            break;
        case 2:
            if (!isset($index[$q[1]])) break;
            if ($index[$q[1]] <= $q[2]) {
                unset($index[$q[1]], $nums[$q[1]]);
                if ($max == $q[1]) $max = (!empty($nums))? max($nums) : 0;
                if ($min == $q[1]) $min = (!empty($nums))? min($nums) : PHP_INT_MAX;
            } else {
                $index[$q[1]] -= $q[2];
            }
            break;
        case 3:
            if (!empty($nums)) $answer .= ($max - $min)."\n";
            break;
    }
}
 
echo $answer;