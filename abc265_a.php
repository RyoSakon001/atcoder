<?php

list($x, $y, $n) = array_map("intval", explode(" ", trim(fgets(STDIN))));

for ($i=0; $i <=$n ; $i++) { 
    if (($n-$i) % 3 != 0) continue;
    $price[$i] = $i * $x + (($n-$i)/3) * $y;
} 

echo min($price);


