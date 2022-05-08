<?php

list($n, $l) = explode(' ', trim(fgets(STDIN)));
$k = trim(fgets(STDIN));
$array = array_map("intval", explode(' ', trim(fgets(STDIN))));

$right = floor($l/$k+1);
$left = 0;
$search = true;

while ($search) {
    $mid = ceil(($right + $left) / 2); // 最大値を探索する場合、上に合わせる。（左右は対象ではないと理解しておくこと。）

    // 探索値の判定
    $div = 0;
    $start = 0;
    $is_ok = false;
    foreach ($array as $kireme) {
        $piece = $kireme - $start;
        if ($piece >= $mid) {
            $div++;
            $start = $kireme;
            if ($div == $k) { // 必要な切れ目を付け終わった状態
                if ($l - $start >= $mid) { // 最後に切れ端の条件チェック
                    $is_ok = true;
                }
            }
        }
    }

    if ($is_ok) {
        if ($mid >= $right) { // 最大値を探索する場合、右端がOKならば、それで探索は終了する。
            $answer = $mid;
            $search = false;
        }
        $left = $mid; // 左端が正解である可能性は残っている。
    } else {
        $right = $mid - 1; // 右端がNGなので、その１つ手前を、次の探索範囲に設定する。
    }
}

echo $answer.PHP_EOL;