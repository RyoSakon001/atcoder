<?php

list($n, $a, $b) = array_map("intval", explode(" ", trim(fgets(STDIN))));

$parts1 = '';
$parts2 = '';
for ($e=0; $e<$n; $e++) {
    for ($f=0; $f<$b; $f++) {
        $mark1 = ($e % 2 == 0)? '.' : '#';
        $parts1 .= $mark1;
        $mark2 = ($e % 2 == 0)? '#' : '.';
        $parts2 .= $mark2;
    }
}

$parts11 = '';
$parts22 = '';
for ($g=0; $g<$a; $g++) {
    $parts11 .= $parts1."\n";
    $parts22 .= $parts2."\n";
}

for ($h=0; $h<$n; $h++) {
    $output = ($h % 2 == 0)? $parts11 : $parts22;
    echo $output;
}