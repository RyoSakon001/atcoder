<?php

$s = trim(fgets(STDIN));

for ($i = 0; $i < strlen($s); $i++) {
    $array[$i] = substr($s, $i, 1);
}

sort($array);

for ($i = 0; $i < strlen($s); $i++) {
    if ($array[$i] != $i) {
        echo $i.PHP_EOL;
        exit();
    }
}

echo 9;
echo PHP_EOL;