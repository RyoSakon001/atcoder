<?php

$n = trim(fgets(STDIN));
$hits = array_map("intval", explode(" ", trim(fgets(STDIN))));
$players = [];

foreach($hits as $hit) {
    $players[] = 0;
    foreach($players as &$player) {
        $player += $hit;
    }
}

$score = 0;
foreach($players as &$player) {
    if ($player >= 4) $score++;
}

echo $score."\n";