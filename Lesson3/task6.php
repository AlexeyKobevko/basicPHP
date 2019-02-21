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
        if (isset($element['title'])) {
            echo '<li>' . $element['title'] . '</li>';
        }
        if (isset($element['children'])) {
            addMenu($element['children']);
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

