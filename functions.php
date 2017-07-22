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
            die("Неверное кол-во параметров. Параметр 1й - массив строк, 2-й - логический");
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
        $op = ['+', '-', '/', '*'];
//    echo in_array($operation, $op);
        if ($num_args !== 2) {
            die("Неверное количество элементов! (допустимо 2, передаваемых в функцию(1 - массив чисел, 2й " .
                "- арифметическая операция)");
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

if (TASK3 === true) {
    function task3()
    {
        $args = func_get_args();
        $op = ['+', '-', '/', '*'];
        $operation = "";
        $numbers = [];
        if (count($args) <= 2) {
            die("Неверное количество элементов! Первый элемент - арифметическая операция, второй и/или (последующие).
            вещественные или целые числа.");
        } elseif (!in_array($args[0], $op, true)) {
            die("Некорректная арифметическая операция");
        } else {
            $operation = $args[0];
            for ($i = 1; $i < count($args); $i++) {
                if (!(gettype($args[$i]) == "integer" || gettype($args[$i]) == "double")) {
                    die("3й и/или последующие аргументы функции должны быть вещественными или целыми числами!");
                } else {
                    $numbers[] = round($args[$i], 2);
                }
            }
        }
        //main action
        $res = 'Результат = ';
        $expression = '';
        for ($i = 0; $i < count($numbers); $i++) {
            if ($i == (count($numbers) - 1)) {
                $expression .= "{$numbers[$i]}";
            } else {
                $expression .= "{$numbers[$i]} $operation ";
            }
        }
        echo $res . $expression . ' = ';
        $result = eval("return ($expression);");
        echo round($result, 2);
        return;
    }
}

if (TASK4 === true) {
    function task4($int1, $int2)
    {
        if (!(func_num_args() === 2)) {
            die("Допускается 2 аргумента - целых чисел.");
        } elseif (!((gettype($int1) === "integer") && (gettype($int2) === "integer"))) {
            die("Введенные аргументы не целые числа");
        } else {
            echo "<table style='border: 1px solid black; border-collapse: collapse;'>";
            for ($i = 1; $i <= $int1; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $int2; $j++) {
                    echo "<td style='border: 1px solid black;'>&nbsp". $i * $j . "&nbsp;</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
}

if (TASK5 === true) {
    function task5($polindrom)
    {
        echo $polindrom;
        $array = [];
        $polindrom = mb_strtolower($polindrom, 'UTF-8');
        $polindrom = strip_tags($polindrom);
        $polindrom = str_replace(" ", "", $polindrom);
        $array = preg_split('//u', $polindrom, -1, PREG_SPLIT_NO_EMPTY);
        $length = count($array); // get the size of array
        $revert_st = "";
        //main action
        for ($i = $length; $i >= 0; $i--) {
              $revert_st .= $array[$i];
        }
        if ($revert_st === $polindrom) {
            return true;
        } else {
            return false;
        }
    }
}
