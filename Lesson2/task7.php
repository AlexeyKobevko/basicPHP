<?php

function rightWordsForm($h, $m) {
    $h1 = $h % 100;
    $h2 = $h1 % 10;
    $m1 = $m % 10;
    if ($h1 === 0 || $h1 > 4 && $h1 < 21) {
        $hours = 'часов';
    }
    if ($h2 === 1) {
        $hours = 'час';
    } elseif ($h2 > 1 && $h1 < 5) {
        $hours = 'часа';
    }

    if ($m1 === 0 || $m1 > 4 && $m1 < 21) {
        $minutes = 'минут';
    } elseif ($m1 === 1) {
        $minutes = 'минута';
    } elseif ($m1 > 1 && $m1 < 5) {
        $minutes = 'минуты';
    }
    echo $h . ' ' . $hours . ' : ' . $m . ' ' . $minutes;
}

$date = date("G:i");
$hours = date('G', strtotime($date));
$minutes = date('i', strtotime($date));
rightWordsForm($hours, $minutes);
