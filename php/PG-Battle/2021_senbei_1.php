<?php

$p = trim(fgets(STDIN));
$win = $p/100;
$lose = (100-$p)/100;

// $one_win = pow($win,1)*pow($lose,6)*(7)/(1);
// $two_win = pow($win,2)*pow($lose,5)*(7*6)/(2*1);
// $three_win = pow($win,3)*pow($lose,4)*(7*6*5)/(3*2*1);
$four_win = pow($win,4)*pow($lose,3)*(7*6*5)/(3*2*1);
$five_win = pow($win,5)*pow($lose,2)*(7*6)/(2*1);
$six_win = pow($win,6)*pow($lose,1)*(7)/(1);
$seven_win = pow($win,7)*pow($lose,0)*1;

$total = $four_win+$five_win+$six_win+$seven_win;
echo $total*100;