<?php

// 1. Создайте переменную $isGood со значением true и создайте переменную $smallNumber с целым числом от 1 до 5 в качестве значения
// Предположите какой тип данных и значение будет, если сложить эти переменные
// А теперь сложите две переменных и выведите результат сложения и его тип
$isGood = true;//вывод забавный, но true = 1
$smallNumber = 2;
var_dump ($isGood + $smallNumber);

// 2. В коде ниже есть ошибка. Уберите комментарии и исправьте ошибку так, чтобы код выполнился.

$firstDay = 'Понедельник';
$secondDay = 'Вторник';
$Day = 'Среда';

var_dump($firstDay . ' ' . $secondDay . ' ' . $Day);


// 3. Создайте переменную $catsCount, в качестве значения укажите любое целое число от 1 до 9
// И исправьте ошибку в коде ниже. На странице должно быть выведено похожее сообщение: "Во дворе котов: 3", где вместо 3 то число, что находится в переменной $catsCount
$catsCount = 8;
var_dump("Во дворе котов: $catsCount");


// 4. Создайте переменную $currentDate, поместите в нее в виде строки текущую дату в формате ГГГГ-ММ-ДД, например 1971-12-31
// Выведите 1-ю строку: "Шла зима. Календарь неумолимо показывает 1971-12-31. Эх, скорей бы лето", вместо даты нужно подставить значение переменной
// Выведите 2-ю строку: "Шла зима. Календарь неумолимо показывает $currentDate. Эх, скорей бы лето"
$currentDate = '1971-12-31';
echo ("Шла зима. Календарь неумолимо показывает $currentDate. Эх, скорей бы лето<br>");
echo ('Шла зима. Календарь неумолимо показывает $currentDate. Эх, скорей бы лето');

// 5. Исправьте названия переменных, так чтобы было понятно, за что отвечают эти переменные
$name = 'Мурзик';
$leghtsum = 4;
$ears = 2;
$lenght = 27;
$color = 'черного';
$color= 'белого';
$color2= 'черного';
$pool = 'тазик';
$tmp = 'с мазутом';

var_dump("Жил был кот по имени $name");
var_dump("У него было $leghtsum лапы, $ears уха и хвост длинной $lenght см");
var_dump("Сам он был $color цвета, но лапки были $color цвета");
var_dump("Однажды он пошел гулять и упал в $pool $tmp");
var_dump("Теперь и лапы нашего кота тоже $color2 цвета");

// При создании этого задания ни один котик не пострадал!
