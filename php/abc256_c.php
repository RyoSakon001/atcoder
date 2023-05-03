<?php
// タイムオーバー。動的計画法と思われる

list($h1, $h2, $h3, $w1, $w2, $w3) = array_map("intval", explode(" ", trim(fgets(STDIN))));
// 0 1 2
// 3 4 5
// 6 7 8
// $arr = array_fill(0, 9, 1);
$max = max($h1, $h2, $h3, $w1, $w2, $w3) - 2;
$pattern = 0;

for ($a=1; $a<=$max; $a++) {
    for ($b=1; $b<=$max; $b++) {
        for ($c=1; $c<=$max; $c++) {
            for ($d=1; $d<=$max; $d++) {
                for ($e=1; $e<=$max; $e++) {
                    for ($f=1; $f<=$max; $f++) {
                        for ($g=1; $g<=$max; $g++) {
                            for ($h=1; $h<=$max; $h++) {
                                for ($i=1; $i<=$max; $i++) {
                                    // print_r($a.' '.$b.' '.$c.' '.$d.' '.$e.' '.$f.' '.$g.' '.$h.' '.$i);
                                    // echo "\n";
                                    if (check($a, $b, $c, $d, $e, $f, $g, $h, $i, $h1, $h2, $h3, $w1, $w2, $w3)) $pattern++;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

echo $pattern."\n";

function check($n0, $n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $h1, $h2, $h3, $w1, $w2, $w3) {
    if ($n0+$n1+$n2 != $h1) return false;
    if ($n3+$n4+$n5 != $h2) return false;
    if ($n6+$n7+$n8 != $h3) return false;
    if ($n0+$n3+$n6 != $w1) return false;
    if ($n1+$n4+$n7 != $w2) return false;
    if ($n2+$n5+$n8 != $w3) return false;
    return true;
}

// $time_start = microtime(true);

// $answer = '';
// echo $answer.PHP_EOL;




// $time = microtime(true) - $time_start;
// echo "\n{$time}";
