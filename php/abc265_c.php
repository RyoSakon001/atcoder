
<?php

list($h, $w) = array_map("intval", explode(" ", trim(fgets(STDIN))));

for ($i=0; $i<$h; $i++) {
    $g[$i] = str_split(trim(fgets(STDIN)));
    $hasVisitedArr[$i] = array_fill(0, $w, false);
}

$i = $j = 0;

while(true) {
    if ($hasVisitedArr[$i][$j]) {
        echo "-1";
        exit();
    }
    $hasVisitedArr[$i][$j] = true;

    if ($g[$i][$j] == 'U' && $i != 0) {
        $i--;
      } elseif ($g[$i][$j] == 'D' && $i != $h - 1) {
        $i++;
      } elseif ($g[$i][$j] == 'L' && $j != 0) {
        $j--;
      } elseif ($g[$i][$j] == 'R' && $j != $w - 1) {
        $j++;
      } else {
        break;
      }
}

// (0,0)からスタートしているため調整
$i++;
$j++;
echo "$i $j";
exit();