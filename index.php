<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 19.07.17
 * Time: 4:47
 */
//конфиг можно в одну константу с битовой маской через логическое сложение вкл/выл функционал
define("TASK1", true);
define("TASK2", true);
define("TASK3", true);
define("TASK4", true);
define("TASK5", true);
//2nd webinar
define("TASK6", true);
define("TASK7", true);
define("TASK8", true);
define("TASK9", true);

require "functions.php";

/*echo "<h2>Задание № 1</h2>";
task1(["one", "two" , "three"], true);*/

/*echo "<h2>Задание № 2</h2>";
task2([1,8,3,4], '/');

echo "<h2>Задание № 3</h2>";
task3('/', 4, 2.2, 3, 6.5, 10);*/

/*echo "<h2>Задание № 4</h2>";
//multipl... table echo
task4(4, 6);*/

/*echo "<h2>Задание № 5</h2>";
//полиндром в качестве примера...
$st_pol = "У скал плакса ласкал плаксу";
//НЕ полиндром из него же...
$st_not_pol = "У скал плакса плаксу ласкал";
$result = task5($st_pol);
//дополнительная функция для вывода подтверждения по условию
if ($result === true) {

    function poliecho()
    {
        echo "<br>Эта строка -  является полиндромом.<br>"; //\"$polindrom\",
    }
    $result = "poliecho";
    $result();
} else {

    function not_poliecho()
    {
        echo "<br>Эта строка не является полиндромом.<br>";
    }
    $result = "not_poliecho";
    $result();
}*/

/*echo "<h2>Задание № 6</h2>";

date_default_timezone_set('Europe/Moscow');
task6();*/

/*echo "<h2>Задание № 7</h2>";

task7();*/

/*echo "<h2>Задание № 8</h2>";
$receive_strs = [
    "RX packets:950381 errors:0 dropped:0 overruns:0 frame:0. ",
    'RX packets:300 errors:90 dropped:0 overruns:0 frame:0. ',
    "anyone text message ",
    "RX packets:100000 errors:5 dropped:5 overruns:0 frame:15. ",
    "anyone text :) messsage with smile ",
    "RX packets:950381 errors:0 dropped:0 overruns:0 frame:0. ",
    "RX packets:300 errors:90 dropped:0 overruns:0 frame:0. "
];

task8($receive_strs);*/

task9();