<?php

$n = trim(fgets(STDIN));
$dishPositionArr = array_map("intval", explode(" ", trim(fgets(STDIN))));

$dp = [];
foreach ($dishPositionArr as $peason => $dishPosition) {
    $homePositionMovingTimes =  $peason - $dishPosition;
    if ($peason >= $dishPosition) $homePositionMovingTimes += $n;
    $dp[$peason] = array_fill(0, $n, 0);
    $dp[$peason][($homePositionMovingTimes+$n-1)%$n] = $dp[$peason][($homePositionMovingTimes+$n)%$n] = $dp[$peason][($homePositionMovingTimes+$n+1)%$n] = 1;
}

$sumArr = array_fill(0, $n, 0);
for ($i=0; $i<$n; $i++) {
    for ($j=0; $j<$n; $j++) { 
        $sumArr[$i] += $dp[$j][$i];
    }
}

$answer = max($sumArr);
echo $answer.PHP_EOL;