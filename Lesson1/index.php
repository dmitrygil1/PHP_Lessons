<?php 
error_reporting(0);

echo "Пробуем в переменные";
$name = "Alex";
echo $name;

//тут пробуем иначе(типа много разных переменных)
$my_variable = " тут пробуем переменную my_variable";
$myVariable = " А тут пробуем переменную myVariable (норм челики всегда пишут на английском";
echo $my_variable, $myVariable;
echo "Тут пробуем вообще не заданную переменную и error_reporting(0)". $kek;


// пробуем переменную вкинуть в другую переменную, своего рода многоножка переменных:
$surname = "Smith";

$fullname = $name.$surname; //конкатенация (объединение строк)
echo "My name is {$fullname}'s"; //Вот как обособить переменную от строки, но только с ""


//пробуем на вкус константы
define("NAME","Алексей"); //Вот так задается константа, хорошим тоном считается константа с БОЛЬШИМИ БУКВАМИ (но это неточно)
echo /*странная особенность языка*/'<br/>'."Вот тут пробуем в константы:".NAME; // для констант не нужен $
?>