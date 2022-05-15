<?php

$s = trim(fgets(STDIN));

if (strlen($s) == 1) $answer = $s.$s.$s.$s.$s.$s;
if (strlen($s) == 2) $answer = $s.$s.$s;
if (strlen($s) == 3) $answer = $s.$s;

echo $answer.PHP_EOL;