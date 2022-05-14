<?php

list($a, $b, $c) = array_map("intval", explode(" ", trim(fgets(STDIN))));

if ($a < $c**$b) {
    echo "Yes\n";
} else {
    echo "No\n";
}