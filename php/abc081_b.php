<?php

$N = intval(trim(fgets(STDIN)));

$nums = explode(' ', fgets(STDIN));

$i = 0;
$count = 0;
$times = 0;
$roop = true;
while ($roop) {
    while ($i < $N) {
        if ($nums[$i] % 2 === 0) $count++;
        $i++;
    }
    if ($count === $N) {
        $i = 0;
        $times++;
        while ($i < $N) {
            $nums[$i] = $nums[$i] / 2;
            $i++;
        }
    } else {
        $roop = false;
    }
    $i = 0;
    $count = 0;
}

echo $times;

echo PHP_EOL;

?>