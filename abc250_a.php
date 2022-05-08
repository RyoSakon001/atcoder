<?php

list($h, $w) = array_map("intval", explode(" ", trim(fgets(STDIN))));
list($r, $c) = array_map("intval", explode(" ", trim(fgets(STDIN))));

$answer = 4;
if ($r == 1) $answer--;
if ($r == $h) $answer--;
if ($c == 1) $answer--;
if ($c == $w) $answer--;
echo $answer.PHP_EOL;