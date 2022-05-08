<?php

list($n, $k) = explode(' ', trim(fgets(STDIN))); // 5 2

$i = 0;
while ($i < $n) {
    $array_words[] = trim(fgets(STDIN)); // ['abc', 'adf', 'bde', 'bacd', 'affac']
    $i++;
}

$str = implode('', $array_words); // abcadfbdebacdaffac
$i = 0;
while ($i < strlen($str)) {
    $alphabetArr[$i] = substr($str, $i, 1); // ['a', 'b', 'c', 'a', 'd', 'f', 'b', 'd', 'e', 'b', 'a', 'c', 'd', 'a', 'f', 'f', 'a', 'c']
    $i++;
}
$alphabetArr = array_unique($alphabetArr); // ['a', 'b', 'c', 'd', 'f', 'e']

$all_patterns = pow(2, $n); // 32

for ($i = 1; $i < $all_patterns; $i++) { // 13 = 8 + 4 + 1

    $pattern[$i] = 0;
    $array_use = [];
    $array_use_words = [];
    $bit_str = sprintf('%0'.$n.'d', decbin($i)); // n桁：01101

    for ($l = 0; $l < strlen($bit_str); $l++) {
        $array_use[$l] = substr($bit_str, $l, 1); // [0, 1, 1, 0, 1]
    }

    for ($m = 0; $m < count($array_use); $m++) {
        if ($array_use[$m] === '1') $array_use_words[] = $array_words[$m]; // ['adf', 'bde', 'affac']
    }

    foreach ($alphabetArr as $alphabet) { // ['a', 'b', 'c', 'd', 'f', 'e']
        $count = 0;
        foreach ($array_use_words as $word) { // ['adf', 'bde', 'affac']
            if (strpos($word, $alphabet) !== false) $count++; // adf, affac
        }
        if ($count == $k) $pattern[$i]++;
    }
}

echo max($pattern).PHP_EOL;