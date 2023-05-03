<?php

$s = fgets(STDIN);
$s1 = substr($s,0,1);
$s2 = substr($s,1,1);
$s3 = substr($s,2,1);

echo $s1+$s2+$s3;

echo PHP_EOL;

?>