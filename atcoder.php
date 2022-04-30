<?php

for($i=1; $i<=100; $i++) {
    $a[$i] = pow($i, 4);
}

echo array_sum($a);
