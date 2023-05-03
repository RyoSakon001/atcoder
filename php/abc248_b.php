<?php

list($a, $b, $k) = explode(' ', trim(fgets(STDIN)));

for ($i = 0; $a < $b; $i++) {
    $a = $a * $k;
}

echo $i.PHP_EOL;