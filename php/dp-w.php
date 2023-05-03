<?php

list($n, $m) = explode(' ', trim(fgets(STDIN)));
for ($i=0; $i<$m; $i++) {
    list($l[$i], $r[$i], $a[$i]) = explode(' ', trim(fgets(STDIN)));
}
$limit = pow(2,$n);
for ($j=0; $j<$limit; $j++) {
    $binary[$j] = sprintf('%0'."$n".'d', decbin($j));
}

for ($j=0; $j<$limit; $j++) {
    $dp[0][$j] = ((intval(substr($binary[$j], $l[0] - 1, $r[0] - $l[0] + 1))) != 0)? $a[0] : 0;
}

for ($i=1; $i<$m; $i++) {
    for ($j=0; $j<$limit; $j++) {
        $dp[$i][$j] = $dp[$i-1][$j];
        if ((intval(substr($binary[$j], $l[$i] - 1, $r[$i] - $l[$i] + 1))) != 0) $dp[$i][$j] += $a[$i];
    }    
}

$answer = max($dp[$m-1]);
echo $answer.PHP_EOL;

入力例
5 3 // ５桁の二進数・３つの条件数
1 3 10 // １～３文字目に「１」があれば、＋１０点
2 4 -10
3 5 10
j                        0      1      2      3      4   ...31
                     00000  00001  00010  00011  00100   11111
i
条件0まで適用した得点     0      0      0    10     10       10
条件1まで適用した得点     0      0    -10     0      0        0 
条件2まで適用した得点     0     10      0    10     10       10