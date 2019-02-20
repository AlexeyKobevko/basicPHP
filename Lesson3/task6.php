<?php

$menu = [
    [
        'title' => 'Главная',
        'link' => '/',
        'children' => [],
    ],
    [
        'title' => 'О нас',
        'link' => '/about/',
        'children' => [],
    ],
    [
        'title' => 'Каталог',
        'link' => '/catalog/',
        'children' => [
            [
                'title' => 'Мужская одежда',
                'link' => '/catalog/men/',
                'children' => [],
            ],
            [
                'title' => 'Женская лдежда',
                'link' => '/catalog/women/',
                'children' => [],
            ],

        ],
    ],
    [
        'title' => 'Контакты',
        'link' => '/contacts/',
        'children' => [],
    ],
];

function addMenu($array){
    if ($array == false) {
        return;
    }
    $list = '<ul>';
    foreach ($array as $element) {
        $list = $list . '<li>' . $element['title'] . addMenu($element['children']) . '</li>';
    }
    return $list = $list . '</ul>';
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

