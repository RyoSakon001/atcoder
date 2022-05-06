<?php

list($n, $k, $x) = array_map("intval", explode(" ", trim(fgets(STDIN))));

$array = array_map("intval", explode(" ", trim(fgets(STDIN))));
$array_quotient = array_map(function($value) use($x){ // Xで割った商の配列（チケットを最大何枚まで、効率よく使えるか）
    return intdiv($value, $x); 
}, $array);

for ($i=0; $i<$n; $i++) {
    if ($k >= $array_quotient[$i] && $k > 0) {
        // チケットが十分あるならば、まとめて使用する。
        $array[$i] -= ($array_quotient[$i] * $x);
        $k -= $array_quotient[$i];
    } else if ($k > 0) {
        // チケットが足りないならば、残りの分だけ使用する。
        $array[$i] -= ($k * $x);
        $k -= $k;
        break;
    }
}

// 最大効率で割引し、さらにチケットが余っている場合
rsort($array);
if ($k != 0) {
    foreach ($array as &$val) {
        $val = 0;
        $k--;
        if ($k == 0) break;
    }
}

$sum = array_sum($array);
echo $sum.PHP_EOL;