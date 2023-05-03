<?php

$n = intval(trim(fgets(STDIN)));
if ($n % 2 != 0) {
    exit();
}
for ($i=pow(2,$n-1); $i<pow(2,$n); $i++) {
    $tmp = sprintf("%0{$n}b", $i); // バイナリ値のformatで行ける！！！
    if (substr_count($tmp, '1') == substr_count($tmp, '0')) $array[] = $tmp;
}
$array = str_replace('1', '(', $array);
$array = str_replace('0', ')', $array);
usort($array, "strcmp");
foreach ($array as $bracketStr) {
    $tmp2 = $bracketStr;
    while (strpos($tmp2, '()') !== false) {
        $tmp2 = str_replace('()', '', $tmp2);
    }
    if ($tmp2 == '') echo $bracketStr."\n";
}
echo PHP_EOL;