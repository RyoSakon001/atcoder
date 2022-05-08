<?php

$s = trim(fgets(STDIN));

$flg1 = 0;
$flg2 = 0;
$flg3 = 0;

$i = 0;
while ($i < strlen($s)) {
    $array[$i] = substr($s, $i, 1);
    if (ctype_upper($array[$i])) $flg1 = 1;
    if (ctype_lower($array[$i])) $flg2 = 1;
    $i++;
}

if (count($array) === count(array_unique($array))) $flg3 = 1;

if ($flg1 === 1 && $flg2 === 1 && $flg3 === 1) {
    echo 'Yes';
} else {
    echo 'No';
}

echo PHP_EOL;