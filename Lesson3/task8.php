<?php

$regions = [
    'Московская область' => [
        'Одинцово', 'Реутов', 'Дмитров'
    ],

    'Ленинградская область' => [
        'Выборг', 'Гатчина', 'Луга'
    ],

    'Рязанская область' => [
        'Касимов', 'Ряжск', 'Шацк'
    ]
];

foreach ($regions as $region => $cities) {
    echo $region . ":<br/>";
    foreach ($cities as $key => $name) {
        if (mb_substr($name, 0, 1) === 'К') {
            echo $name . ", ";
        } else continue;
    }
    echo "<br/>";
}