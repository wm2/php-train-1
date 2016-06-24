<?php

function CleanStr($data){
    strip_tags(trim($data));
    return $data;

}

function drawTable($cols, $rows, $color)
{
    echo "<table border=\"1\" width=\"300\">";

    for ($i = 1; $i <= $rows; $i++) {
        if ($i == 1):
            echo '<tr bgcolor=' . $color . ' align="center">';
        else:
            echo '<tr>';
        endif;

        for ($k = 1; $k <= $cols; $k++) {

            if ($i == 1 or $k == 1)
                echo '<th bgcolor=' . $color . ' align="center">' . $i * $k . '</th>';
            else
                echo '<td>' . $i * $k . '</td>';
        }
        echo '</tr>';
    }
    echo "</table>";

}

function drawMenu($menu, $vertikal = true)
{
    if (!is_array($menu))
        return false;
    $style = '';
    if (!$vertikal){
        echo '<hr>';
        $style = " style = 'display:inline; margin-right: 15px' ";
    }
    echo '<ul>';
    foreach ($menu as $item) {
        echo "<li$style>";
        echo "<a href='{$item['href']}'>{$item['link']}</a>";
        echo '</li>';
    }
    echo '</ul>';
    return true;
}


?>