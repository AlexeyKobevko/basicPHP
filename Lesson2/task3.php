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

//echo addition(10, 5) . '<br/>'; // 15
//echo subtraction(10, 5) . '<br/>'; //5
//echo multiplication(10, 5) . '<br/>'; //50
//echo division(10, 5) . '<br/>'; //2

