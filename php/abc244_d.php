<?php
$s = array_map("strval", explode(" ", trim(fgets(STDIN))));
$t = array_map("strval", explode(" ", trim(fgets(STDIN))));

$same = 0;
for ($i=0; $i<=2; $i++) {
    if ($s[$i] == $t[$i]) $same++;
}

if ($same == 0 || $same == 3) $answer = 'Yes';
if ($same == 1) $answer = 'No';

echo $answer.PHP_EOL;