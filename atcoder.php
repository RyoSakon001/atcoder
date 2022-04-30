<?php

$i = 1;
while($i=1; $i<=50000; $i++) {
    if ($i % 3 == 0 || strpos(strval($i), '3') !== false) $sum += $i;
}

echo $sum;
