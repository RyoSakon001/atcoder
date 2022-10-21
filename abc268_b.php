<?php

$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));

$length = strlen($s);
if ($s === substr($t,0,$length)) {
    echo "Yes";
} else {
    echo "No";
};
