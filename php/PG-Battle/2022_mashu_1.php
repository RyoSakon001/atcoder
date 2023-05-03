<?php

$japanese_number = trim(fgets(STDIN));
$global_number = '81'.substr($japanese_number,1,10);

echo $global_number;