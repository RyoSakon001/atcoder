<?php
// 未完成
$n = intval(trim(fgets(STDIN)));

$array = pf($n);
$count = array_count_values($array);

if (in_array(3, $array)) {

}
print_r($count);


function pf($n) {
    $result = array();

    if ($n === 1) {
        return [1];
    }

    $init = 2;

    while ( $n !== 1 ) {
        $i = $init;
        while ($i < 0xFFFFFF) {
            if ($n % $i == 0) {
                $result[] = $i;
                $n /= $i;
                break;
            }
            $i++;
        }
        $init = $i;
    }
    return $result;
}