<?php
error_reporting(0);

require("data.inc.php");
require("lib.inc.php");
$title = 'Сайт нашей школы';
$header = "$welcome, Гость!";
$id = strtolower(CleanStr($_GET['id']));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <title><?php echo $title ?></title>
    <meta http-equiv="content-type"
          content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>

<div id="header">
    <!-- Верхняя часть страницы -->
    <?php
    require("top.inc.php");
    ?>
    <!-- Верхняя часть страницы -->
</div>

<div id="content">
    <!-- Заголовок -->
    <h1><?php echo $header ?></h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php

    switch ($id) {
        case 'about':
            include 'about.php';
            break;
        case 'contact':
            include 'contact.php';
            break;
        case 'table':
            include 'table.php';
            break;
        case 'calc':
            include 'calc.php';
            break;
        default :
            include 'index.inc.php';
    }

    ?>
    <!-- Область основного контента -->
</div>
<div id="nav">
    <!-- Навигация -->
    <?php

    include("menu.inc.php");
    ?>
    <!-- Меню -->
    <!-- Навигация -->
</div>
<div id="footer">
    <!-- Нижняя часть страницы -->
    <?php

    require("bottom.inc.php");

    ?>
    <!-- Нижняя часть страницы -->
</div>
</body>
</html>