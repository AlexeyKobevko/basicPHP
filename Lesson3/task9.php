<?php

function stringToUrl($sentence) {
    //для url-адресов заглавные буквы не нужны
    $string = mb_strtolower($sentence);
    $vocabulary = [
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e',
        'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k',
        'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r',
        'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shch', 'ъ' => 'ie', 'ы' => 'y', 'ь' => "'",
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
    ];

    $translit = strtr($string, $vocabulary);
    return str_replace(' ', '_', $translit);
}

echo stringToUrl("Мама мыла раму<br/>");
echo stringToUrl("Шла Маша по шоссе и сосала сушку<br/>");
echo stringToUrl("Вечерело<br/>");