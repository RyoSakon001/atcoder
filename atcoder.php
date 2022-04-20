<?php

/* 
https://atcoder.jp/contests/abs/tasks/xxxxxxxxxx
*/

// 単一のStandard Input
$a = trim(fgets(STDIN));

// 複数のStandard Input
list($b, $c) = explode(' ', fgets(STDIN));

// $W行$H列のStandard Input
list($i, $j, $W, $H) = [0, 0, 2, 2];
while ($i < $H) {
    $array[$i] = explode(' ', fgets(STDIN));
    $i++;
}
$i = 0;
while ($i < $H) {
    echo implode(' ', $array[$i]);
    $i++;
}

// 最後は改行して終わるルールがあるため
echo PHP_EOL;

?>