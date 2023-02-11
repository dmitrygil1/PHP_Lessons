<?php
echo ("Раздел, посвященный массивам в PHP<br><br>Пример массива:");
$args = ['А это Нумерованный массив из 4х значений', 10, 76.5, true]; //array - массив. Данная конструкция записывает в массив $arfs массив 1,2,3
var_dump ($args);
echo ("В таком массиве ключи расставляются автоматически числами 0 =..., 1=..., и т.д., сами значения любые <br>");
//устаревшая конструкция, обычно []
$args_with_keys = array (
    "name" => "Dmitry Giloveynya",
    "age" => 21,
    "height" => 1.91,
    "is_maile" => true,
);
var_dump ($args_with_keys);
echo ("В таком массиве ключи уже задаются программистом <br><br>"); //Массивы зачастую используют для групировки (напр. имен)
echo ("Важно! Массивы можно вкладывать друг в друга и даже задавать внутри друг друга))<br>");
$massivische = [
    $args, 
    $args_with_keys,
    $fruits = ['Этот массив создан внутри другого wtf','aples','bananas','pinaples']
];
var_dump ($massivische);

//Чтобы посмотреть сколько элементов в массиве = юзается count($massiv)
echo "Вывод количества значений в массиве по count() = ".count ($massivische);
//!Важно: массив нельзя вывести через echo т.к. echo - функция вызова строк

echo "<br>Вывод конкретного значения из массива по ключу: ".$args_with_keys['name']."<br>";
echo "функция array_push служит для закидывания в массив значений, например array_push(\$fruits, 'mango')<br>"; 
array_push($fruits,'mango','oranges');
var_dump ($fruits); //в массив добавилось два новых значения

asort($fruits);//сортировка массивов
echo "<br>Вывод сортированного массива<br>";
var_dump($fruits);

$sumOfArgs = array_merge($fruits,$args);
echo "<br>Объединение массивов<br>";
var_dump($sumOfArgs);
//сам массив не меняется, поэтому значение функции записывается в дргуой массив, как и ниже:
$reversemass = array_reverse($sumOfArgs); 
echo "<br>Переворот массивов (не сортировка)<br>";
var_dump($reversemass);
//преобразование строки в массив:
$string_to_args = ('Маша, Дима, вася');
var_dump ($string_to_args);
echo "Делаем массив по разделителю ',' из строки выше:<br>";
$names = explode (",",$string_to_args);
var_dump ($names);
?>