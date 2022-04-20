<!-- https://atcoder.jp/contests/abs/tasks/xxxxxxxxxx -->

<?php

$a = trim(fgets(STDIN));

list($b, $c) = explode(' ', fgets(STDIN));

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

echo PHP_EOL;

?>