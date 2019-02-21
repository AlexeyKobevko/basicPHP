<?php

$menu = [
    [
        'title' => 'Главная',
        'link' => '/',
    ],
    [
        'title' => 'О нас',
        'link' => '/about/',
    ],
    [
        'title' => 'Каталог',
        'link' => '/catalog/',
        'children' => [
            [
                'title' => 'Мужская одежда',
                'link' => '/catalog/men/',
            ],
            [
                'title' => 'Женская лдежда',
                'link' => '/catalog/women/',
            ],

        ],
    ],
    [
        'title' => 'Контакты',
        'link' => '/contacts/',
    ],
];

function addMenu($array){
    echo '<ul>';
    foreach ($array as $elem => $element) {
        if (is_array($element)) {
            echo '<li>' . $element['title'] . '</li>';
        }
        if (is_array($element)) {
            addMenu($element);
        }
    }
    echo '</ul>';
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Task 6</title>
    <style>
        ul {
            list-style-type: none;
        }
    </style>
</head>
<body>
<?=addMenu($menu) ?>
</body>
</html>

