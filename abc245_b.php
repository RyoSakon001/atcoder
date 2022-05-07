<?php

$n = trim(fgets(STDIN));
$array = array_map("intval", explode(" ", trim(fgets(STDIN))));
$array = array_unique($array);
sort($array);

for ($i=0; $i<$n; $i++) {
    if ($i != $array[$i]) {
        $answer = $i;
        echo $answer.PHP_EOL;
        exit();
    }
}

$answer = count($array);
echo $answer.PHP_EOL;