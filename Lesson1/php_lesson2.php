<?php //data types
//we have only 2 types of data: строгая and нестрогая - when you need set type of data by hand
echo "Урок 2<br>";
//Задаешь типы данных ручками, амиго
$name = "(TEXT string проверка кодировки (если utf-8 - ты можешь прочитать эту строку) )";
echo $name;
var_dump($name);
echo ("Всё что находится в ковычках = строка//string <br>");
$number = 10;
echo $number;

var_dump($number/*integer*/); //целочисленное число

//echo $name + $number; - выдаст ошибку
$number = 6.5; //float- тип данных с плавающей точкой 6.5462.....
var_dump ($number); 
echo gettype ($number);
echo (" потому что в php double = float, такое бывает не во всех языках программирования <br>");
echo ("Перед заменой типа данных: ".$number."=Значение переменной number<br>");
settype ($number, 'int');
echo ("Вводим settype int для переменной = задать тип данных<br>".$number."=Значение переменной number<br>");
echo gettype ($number);echo("=Тип данных после замены");

//итого: есть 4 типа данных
$string = "Строка";
$int = "Целочисленное";
$float = "Число с плавающей точкой";
$bool = "Ложь/истина";

//функция isset($string) - проверяет существует ли переменная (но именно переменная, а не значение в ней)

var_dump(isset($string)); //true=существует
var_dump(isset($no)); //falce=несуществует, но в ошибку не уходит, что круто


//массивы
echo ('<a href="/PHP_Lesson2/array_lesson2.php">Массивы</a>');
