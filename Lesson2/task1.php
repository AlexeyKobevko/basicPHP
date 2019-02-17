<?php

function simpleCalc ($a, $b) {
    if ($a >= 0 && $b >= 0) {
       $result = $a - $b;
    } else if ($a < 0 && $b < 0) {
        $result = $a * $b;
    } else {
        $result = $a + $b;
    }
    return $result;
}

echo simpleCalc(5, 2) . '<br>';
echo simpleCalc(5, 0) . '<br>';
echo simpleCalc(0, 2) . '<br>';
echo simpleCalc(-5, -2) . '<br>';
echo simpleCalc(-5, 2) . '<br>';