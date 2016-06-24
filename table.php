<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cols = abs((int)$_POST['cols']);
    $rows = abs((int)$_POST['rows']);
    $color = CleanStr($_POST['color']);
}
if (empty($cols))
    $cols = 10;
if (empty($rows))
    $rows = 10;
if (empty($color))
    $color = 'yellow';
//index.php?id=table


?><!-- Область основного контента -->
<form action='<?php $_SERVER['REQUEST_URI'];?>' method="post">
    <label>Количество колонок: </label><br/>
    <input name='cols' type='text' value="<?php echo $_POST['cols']; ?>"/><br/>
    <label>Количество строк: </label><br/>
    <input name='rows' type='text' value="<?php echo $_POST['rows']; ?>"/><br/>
    <label>Цвет: </label><br/>
    <input name='color' type='text' value="<?php echo $_POST['color']; ?>"/><br/><br/>
    <input type='submit' value='Создать'/>
</form>
<br/>
<!-- Таблица -->
<?php

drawTable($cols, $rows, $color);



?>
<!-- Таблица -->
<!-- Область основного контента -->