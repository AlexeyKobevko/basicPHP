<?php

function addition($a, $b) {
    return $a + $b;
}
function subtraction($a, $b) {
    return $a - $b;
}
function multiplication($a, $b) {
    return $a * $b;
}
function division($a, $b) {
    if ($a === 0 || $b === 0) {
        return 0;
    } else {
        return $a / $b;
    }
}
//echo addition(10, 5) . '<br/>';
//echo subtraction(10, 5) . '<br/>';
//echo multiplication(10, 5) . '<br/>';
//echo division(10, 5) . '<br/>';
