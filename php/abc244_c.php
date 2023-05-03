<?php

$n = trim(fgets(STDIN));
for ($i=1; $i<=2*$n+1; $i++) {
    $array[$i] = $i;
}

while (isset($array)) {
    // 高橋の番
    $num = current($array);
    echo $num."\n";
    unset($array[$num]);

    // 青木の番
    flush();
    $num = trim(fgets(STDIN)); // 残っている数字を入力
    if ($num == 0) exit;
    unset($array[$num]);
}