<?php

$str = '';
$size = 90000;

for ($i=$size; $i > 0; $i--) { 
    $str = $str.strval($i).' ';
}

echo $str;
file_put_contents("long.txt",$str);