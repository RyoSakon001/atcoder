<?php

list($h, $w) = array_map("intval", explode(" ", trim(fgets(STDIN))));

for ($i=0; $i<$h; $i++) {
    $s[$i] = trim(fgets(STDIN));
    if(strpos($s[$i], 'o') !== false){
        if (substr_count($s[$i], "o") == 2) {
            $array = str_split($s[$i]);
            foreach ($array as $key =>$val) {
                if ($val == 'o') $x[] = $key;
            }
            $answer = abs($x[0] - $x[1]);
            echo $answer."\n";
            exit();
        } else {
            $x[] = strpos($s[$i], 'o');
            $y[] = $i;
        }
    }
}

$answer = (abs($x[0] - $x[1]) + abs($y[0] - $y[1]));
echo $answer."\n";