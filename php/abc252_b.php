<?php

list($n, $k) = array_map("intval", explode(" ", trim(fgets(STDIN))));

$A = array_map("intval", explode(" ", trim(fgets(STDIN))));
// キー番号を１ずらす
array_unshift($A, '');
unset($A[0]);
$B = array_map("intval", explode(" ", trim(fgets(STDIN))));
$B = array_combine($B, $B);

$max = max($A);
foreach ($B as $key => $val) {
    if ($A[$key] == $max) {
        echo "Yes\n";
        exit();
    }
}

echo "No\n";
exit();