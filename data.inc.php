<?php

$max = ini_get('post_max_size');
$letter = $max{strlen($max) -1};
$max = (int)$max;

switch(strtoupper($letter)){
    case 'G' : $max *= 1024;
    case 'M' : $max *= 1024;
    case 'K' : $max *= 1024;

}

define('ERR_DM_LEFT','Извольте...');
define('ERR_DM_BOTTOMT','Идите...');
define('COPYRIGHT', 'Супер Мега Веб-мастер Про');
$hour = (int)strftime('%H');
if ($hour < 7) {
    $welcome = 'Доброй ночи';
} elseif ($hour > 5 and $hour < 12) {
    $welcome = 'Доброе утро';
} elseif ($hour > 11 && $hour < 18) {
    $welcome = 'Добрый день';
} else {
    $welcome = 'Добрый вечер';

}
//echo $hour;

// Установка локали и выбор значений даты
setlocale(LC_ALL, "russian");
$day = strftime('%d');
$mon = strftime('%B');
$year = strftime('%Y');

$leftMenu = array(
    array('link' => 'Домой', 'href' => 'index.php'),
    array('link' => 'О нас', 'href' => 'index.php?id=about'),
    array('link' => 'Контакты', 'href' => 'index.php?id=contact'),
    array('link' => 'Таблица умножения', 'href' => 'index.php?id=table'),
    array('link' => 'Калькулятор', 'href' => 'index.php?id=calc')
);

?>