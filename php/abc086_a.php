<?php

list($a, $b) = explode(' ', fgets(STDIN));

if (($a * $b) % 2 === 0) {
    echo 'Even';
} else {
    echo 'Odd';
}

echo PHP_EOL;

?>