<?php
//пример работы пространства имен
require_once ('function.php');
require_once ('localSum.php');

//конструкция разделяющая одинаковые функции из-за пространства имен:
echo globalSum\getSum(20);
echo localSum\getSum(10);