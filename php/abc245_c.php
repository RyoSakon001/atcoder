<?php

list($n, $k) = array_map("intval", explode(" ", trim(fgets(STDIN))));

$a = array_map("intval", explode(" ", trim(fgets(STDIN))));
$b = array_map("intval", explode(" ", trim(fgets(STDIN))));

// dp: Aの値をとってもよいか。 ep: Bの値をとってもよいか。
$dp = $ep = array_fill(0, $n, false);
$dp[0] = $ep[0] = true;

for ($i=1; $i<$n; $i++) {
    if ($dp[$i-1]) {
        if (abs($a[$i] - $a[$i-1]) <= $k) $dp[$i] = true;
        if (abs($b[$i] - $a[$i-1]) <= $k) $ep[$i] = true;
    }
    if ($ep[$i-1]) {
        if (abs($a[$i] - $b[$i-1]) <= $k) $dp[$i] = true;
        if (abs($b[$i] - $b[$i-1]) <= $k) $ep[$i] = true;
    }
}

if ($dp[$n-1] || $ep[$n-1]) {
    $answer = 'Yes';
} else {
    $answer = 'No';
}

echo $answer.PHP_EOL;

// n = 5
// dp  T   F   T   T   T
// i   0   1   2   3   4

// A   9   8   3   7   2
// i   0   1   2   3   4