<?php

while (true) {
    $a = trim(fgets(STDIN));
    try {
        if ((bool) !preg_match('/^[0-9]+$/', $a)) throw new Exception('半角数字以外を入力しないでください。');
        if (($a < 1) || ($a > 1000)) throw new Exception('数値は1から1000の間で入力してください。');

        break;
    } catch (Exception $ex) {
        echo $ex->getMessage()."\n";
    }
}

while (true) {
    $tmp = trim(fgets(STDIN));
    try {
        if ((bool) !preg_match('/^[0-9]+ [0-9]+$/', $tmp)) throw new Exception('半角数字＋半角スペース＋半角数字で構成された文字列を入力してください。（例：23 45）');

        list($b, $c) = explode(" ", $tmp);
        if (($b < 1) || ($b > 1000) || ($c < 1) || ($c > 1000)) throw new Exception('数値は1から1000の間で入力してください。');

        break;
    } catch (Exception $ex) {
        echo $ex->getMessage()."\n";
    }
}

while (true) {
    $s = trim(fgets(STDIN));
    try {
        if ((bool) !preg_match('/^[a-z]+$/', $s)) throw new Exception('半角英字以外を入力しないでください。');
        if (strlen($s) > 100) throw new Exception('100文字以内で入力してください');

        break;
    } catch (Exception $ex) {
        echo $ex->getMessage()."\n";
    }
}

$sum = $a + $b + $c;
echo "{$sum} {$s}\n";