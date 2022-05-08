<?php

$cost = [120,150,140,110,100]; #それぞれの寿司の値段
$kcal = [8,10,7,6,7]; #それぞれの寿司のカロリー [×10]
$answer = sushi_choice($cost, $kcal, 30);
echo $answer.PHP_EOL;

function sushi_choice ($cost_list, $kcal_list, $max) {
    $list_len = count($kcal_list); //5
    for ($i=0; $i<$list_len; $i++) { // 0,1,2,3,4→寿司1,2,3,4,5
      $dp[$i] = array_fill(0, $max + 1, 0); // 0kcal～30kcal, 計31個
    }

    // 最初の列だけは、前の結果がないため、別のロジックで計算する。
    for ($j=0; $j<=$max; $j++) { // 最上段の１列・31カ所について計算
        if ($kcal_list[0] <= $j) $dp[0][$j] = $cost_list[0]; // もし、リスト１を食べたときのカロリーが、最大カロリーを超えないならば、その表には、その１個分の会計を記録する
    }

    for ($i=1; $i<$list_len; $i++) {
        for ($j=0; $j<=$max; $j++) {
            $values['only_current_max_cost'] = $dp[$i-1][$j];
            if ($j < $kcal_list[$i]) {
                $dp[$i][$j] = $values['only_current_max_cost'];
            } else {
                $values['using_new_sushi_max_cost'] = $cost_list[$i] + $dp[$i-1][$j - $kcal_list[$i]];
                $dp[$i][$j] = max($values);
            }
        }
    }

    return $dp[$list_len - 1][$max];
}