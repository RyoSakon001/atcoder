<?php

$s = trim(fgets(STDIN));

$words = ['dream', 'dreamer', 'erase', 'eraser'];

$s = str_replace($words[3], ' ', $s); // erase, eraserはdreamerの後半と一致するため、先に削除しなければならない
$s = str_replace($words[2], ' ', $s);
$s = str_replace($words[1], ' ', $s);
$s = str_replace($words[0], ' ', $s);
$s = str_replace(' ', '', $s); // dreaerasermなどに対応するため、一旦空白を作り、最後に削除する

if ($s === '') {
    echo 'YES'.PHP_EOL;
} else {
    echo 'NO'.PHP_EOL;
}