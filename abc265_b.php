
<?php

// 部屋の数, ボーナス部屋の数, 持ち時間
list($n, $m, $t) = array_map("intval", explode(" ", trim(fgets(STDIN))));

// 次の部屋に移動するために必要な時間
$movingNextRoomTimeArr = array_map("intval", explode(" ", trim(fgets(STDIN))));

$bonusTimeArr = array_fill(0, $n, 0);
for ($i=0; $i<$m; $i++) {
    $bonusInfo = explode(' ', trim(fgets(STDIN)));
    $bonusTimeArr[$bonusInfo[0] - 1] = $bonusInfo[1];
}

for ($i=0; $i<=$n; $i++) { 
    $t += $bonusTimeArr[$i];
    $t -= $movingNextRoomTimeArr[$i];
    if ($t <= 0) {
        echo "No";
        exit();
    }
}

echo "Yes";