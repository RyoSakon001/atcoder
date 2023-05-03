<?php

list($x1, $y1) = array_map("intval", explode(" ", trim(fgets(STDIN))));
list($x2, $y2) = array_map("intval", explode(" ", trim(fgets(STDIN))));
list($x3, $y3) = array_map("intval", explode(" ", trim(fgets(STDIN))));

if ($x1 == $x2) $x4 = $x3;
if ($x2 == $x3) $x4 = $x1;
if ($x3 == $x1) $x4 = $x2;

if ($y1 == $y2) $y4 = $y3;
if ($y2 == $y3) $y4 = $y1;
if ($y3 == $y1) $y4 = $y2;

echo $x4.' '.$y4.PHP_EOL;