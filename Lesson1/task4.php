<?php

$h1 = "Привет, Мир!";
$title = 'Главная страница';
$year = 2019;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
<style>
    * {
        margin: 0;
        padding: 0;
    }
    html, body {
        min-height: 100%;
    }
    body {
        clear: both;
    }
    .container {
        height: 90vh;
        background-color: dodgerblue;
    }
    .h1 {
        color: white;
        text-align: center;
        margin: 0;
        padding-top: 1.35rem;w
    }
    .footer {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: darkblue;
        color: #1bbeff;
        width: 100%;
        height: 10vh;
    }
</style>
<div class="container">
    <div>
        <h1 class="h1"><?= $h1 ?></h1>
    </div>
</div>
<footer>
    <div class="footer">
        <?= $year ?>
    </div>
</footer>
</body>
</html>
