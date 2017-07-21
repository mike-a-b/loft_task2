<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 19.07.17
 * Time: 4:47
 */
define("TASK1", true);
define("TASK2", true);
define("TASK3", true);

require "functions.php";

/*echo "<h2>Задание № 1</h2>";
task1(["one", "two" , "three"], true);*/

echo "<h2>Задание № 2</h2>";
task2([1,8,3,4], '/');

echo "<h2>Задание № 3</h2>";
task3('/', 4, 2.2, 3, 6.5, 10);
