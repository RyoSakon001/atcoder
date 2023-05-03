<?php

$n = trim(fgets(STDIN));
$sum1[0] = $sum2[0] = 0;
for ($i=1; $i<=$n; $i++) {
    list($c[$i], $p[$i]) = array_map("intval", explode(" ", trim(fgets(STDIN))));
    switch ($c[$i]) { // 累積和
        case 1:
            $sum1[$i] = $sum1[$i-1] + $p[$i];
            $sum2[$i] = $sum2[$i-1];
            break;
        case 2:
            $sum1[$i] = $sum1[$i-1];
            $sum2[$i] = $sum2[$i-1] + $p[$i];
            break;
    }
}
$q = trim(fgets(STDIN));
for ($i=0; $i<$q; $i++) {
    list($l, $r) = array_map("intval", explode(" ", trim(fgets(STDIN))));
    $answer[$i] = ($sum1[$r]-$sum1[$l-1]).' '.($sum2[$r]-$sum2[$l-1]);
}

for ($i=0; $i<$q; $i++) {
    echo $answer[$i]."\n";
}