<?php
list($n, $m) = array_map("intval", explode(" ", trim(fgets(STDIN))));
for ($i=0; $i<$m; $i++) {
    $tmp = explode(' ', trim(fgets(STDIN)));
    $isExist[$tmp[0]][$tmp[1]] = 1;
    $isExist[$tmp[1]][$tmp[0]] = 1;
}

$count = 0;
for ($a = 1; $a <= $n; $a++) {
    for ($b = 1; $b <= $n; $b++) {
        if (!($a<$b)) continue;
        for ($c = 1; $c <= $n; $c++) {
            if(!($b<$c)) continue;
            if (!empty($isExist[$a][$b]) && !empty($isExist[$b][$c]) && !empty($isExist[$c][$a])) $count++;
        }
    }
}
echo $count;