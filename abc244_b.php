<?php

$n = trim(fgets(STDIN));
$tmp = trim(fgets(STDIN));

for ($i=0; $i<$n; $i++) {
    $t[$i] = substr($tmp, $i, 1);
}

$x = $y = 0;
$num = 0;
$pattern = 0;

for ($i=0; $i<$n; $i++) {
    if ($t[$i] == 'S') {
        switch ($pattern) {
            case 0:
                $x++;
                break;
            case 1:
                $y--;
                break;
            case 2:
                $x--;
                break;
            case 3:
                $y++;
                break;
        }
    } else if ($t[$i] == 'R') {
        $num++;
        $pattern = $num % 4;
    }
}

$answer = $x.' '.$y;
echo $answer.PHP_EOL;