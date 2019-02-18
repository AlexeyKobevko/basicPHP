<?php

function recursionPow ($val, $pow) {
    if ($pow > 1) {
        return $val * recursionPow($val, $pow - 1);
    } else if ($pow < 0) {
        return 1 / ($val * recursionPow($val, ($pow * -1) -1));
    } else if ($pow === 0) return 1;
    else return $val;
}

echo recursionPow(2, 4) . '<br/>';
echo recursionPow(3, 5) . '<br/>';
echo recursionPow(4, 3) . '<br/>';
echo recursionPow(9, 6) . '<br/>';
echo recursionPow(2, -3) . '<br/>';
echo recursionPow(2, 0) . '<br/>';
echo recursionPow(2, 1) . '<br/>';