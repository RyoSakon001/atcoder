<?php
$num = 0;
for($i=1; $i< 10000; $i++){
    for($j=1; $j< 10000; $j++){
        $menseki[$i][$j] = $i * $j * 0.5;
        if($menseki[$i][$j] < 5000) $num++;
    }
}

echo $num;
// 93643