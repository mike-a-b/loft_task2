<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 19.07.17
 * Time: 4:46
 */

function task1()
{
    $num_args = func_num_args();
    $str_array = [];
    if ($num_args>2) {
        die();
    } else {
        $str_array = func_get_arg(0);
    }
    if (!is_array($str_array)) {
        die();
    }

    if (func_get_arg(1) === true) {
        $result = implode("", $str_array);
        echo $result."<br>";
        return;
    } else {
        foreach ($str_array as $str) {
            echo "<p>$str</p>\n";
        }
    }
}

function task2()
{
    //
}
