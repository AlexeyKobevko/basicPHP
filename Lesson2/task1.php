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

echo simpleCalc(5, 2) . '<br>'; // 3
echo simpleCalc(5, 0) . '<br>'; // 5
echo simpleCalc(0, 2) . '<br>'; // -2
echo simpleCalc(-5, -2) . '<br>'; // 10
echo simpleCalc(-5, 2) . '<br>'; // -3