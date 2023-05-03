<?php

$x = trim(fgets(STDIN));
$length = strlen($x);
$zero_location = mb_strpos($x, 0);

$answer = substr($x,0,$zero_location).str_repeat("1", $length-$zero_location);

echo $answer;