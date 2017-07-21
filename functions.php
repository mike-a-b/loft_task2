<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 19.07.17
 * Time: 4:46
 */

if (TASK1 === true) {
    function task1()
    {
        $num_args = func_num_args();
        $str_array = [];
        if ($num_args > 2) {
            die("Параметр 1й - массив строк, 2-й - логический");
        } else {
            $str_array = func_get_arg(0);
        }
        if (!is_array($str_array)) {
            die("1й параметр некорректен");
        }

        if (func_get_arg(1) === true) {
            $result = implode("", $str_array);
            echo $result . "<br>";
            return;
        } else {
            foreach ($str_array as $str) {
                echo "<p>$str</p>\r\n";
            }
        }
    }
}

if (TASK2 === true) {
    function task2($int_array, $operation)
    {
        $num_args = func_num_args();
        $int_ar = [];
        $op = ['+', '-', '/', '*'];
//    echo in_array($operation, $op);
        if ($num_args !== 2) {
            echo "Неверное количество элементов! (допустимо 2, передаваемых в функцию(1 - массив чисел, 2й " .
                "- арифметическая операция)";
            die();
        } elseif (gettype($int_array) != "array") {
            echo("Первый параметр доллжен быть массивом");
            foreach ($int_array as $item) {
                (is_integer($item)) ? true : die("Элементы массива должны быть именно числами");
            }
        } elseif (/*(strlen($operation) != 1) &&*/
        (!in_array($operation, $op, true))
        ) {
            die("Некорректная арифметическая операция");
        } else {
            foreach ($int_array as $value) {
                $str = "Выполняем $operation c элементом массива  $value : $value " . $operation . " $value\n";
                echo $str;
                $val = "$value $operation $value";
//                $result = eval("return $val;");
                $result = eval("return ($value $operation $value);");
                echo '<br>Результат = ' . $result . '<br>';
            }
        }
    }
}