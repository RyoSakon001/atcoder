<?php

function factorial($n) {
    if ($n > 1) {
        return factorial($n - 1) * $n;
    } else if ($n < 1) {
        return "この値は不適です";
    } else {
        return 1;
    }
}

function sum_natural_numbers(int $n) {
    if ($n >= 1) return sum_natural_numbers($n - 1) + $n;
    if ($n == 1) return $n;
    return 0;
}

echo sum_natural_numbers(6);
echo factorial(6);