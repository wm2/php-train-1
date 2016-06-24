<?php
$output = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//	Проверить все поля
    $n1 = (int)$_POST['num1'];
    $n2 = (int)$_POST['num2'];
    $op = CleanStr($_POST['operator']);
    $output = "$n1 $op $n2 = ";

    switch ($op) {
        case '+' :
            $output .= $n1 + $n2;
            break;
        case '-' :
            $output .= $n1 - $n2;
            break;
        case '*' :
            $output .= $n1 * $n2;
            break;
        case '/' :
            if ($n2 === 0)
                $output = 'Делить на 0 нельзя !!!';
            else
                $output .= $n1 / $n2;
            break;
        default:
            $output ="Неизвестный оператор $op";
    }


}

if($output)

    echo "<h3>Результат $output</h3>";

?>

<form action='<?php echo $_SERVER['REQUEST_URI'] ?>' method="post">
    <label>Число 1:</label><br/>
    <input name='num1' type='text' value="<?php echo $_POST['num1']?>"/><br/>
    <label>Оператор: </label><br/>
    <input name='operator' type='text' value="<?php echo $_POST['operatord']?>"/><br/>
    <label>Число 2: </label><br/>
    <input name='num2' type='text' value="<?php echo $_POST['num2']?>"/><br/><br/>
    <input type='submit' value='Считать'>
</form>
