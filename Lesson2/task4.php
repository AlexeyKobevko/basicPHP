<?php

require 'task3.php';

function mathOperations ($a, $b, $operation) {
    switch ($operation) {
        case 'addition':
        case '+':
            return addition($a, $b);
        case 'subtraction':
        case '-':
            return subtraction($a, $b);
        case 'multiplication':
        case '*':
            return multiplication($a, $b);
        case 'division':
        case '/':
            return division($a, $b);
    }
}

echo mathOperations(10, 5, 'addition') . '<br/>';
echo mathOperations(10, 5, 'subtraction') . '<br/>';
echo mathOperations(10, 5, 'multiplication') . '<br/>';
echo mathOperations(10, 5, 'division') . '<br/>' . '<hr/>';
echo mathOperations(10, 5, '+') . '<br/>';
echo mathOperations(10, 5, '-') . '<br/>';
echo mathOperations(10, 5, '*') . '<br/>';
echo mathOperations(10, 5, '/') . '<br/>' . '<hr/>';
echo mathOperations(10, 0, '+') . '<br/>';
echo mathOperations(10, 0, '-') . '<br/>';
echo mathOperations(10, 0, '*') . '<br/>';
echo mathOperations(10, 0, '/') . '<br/>' . '<hr/>';