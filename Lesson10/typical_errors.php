<?php

//Здесь разберем типовые ошибки неопытных разработчиков

//1. Использование констант вместо строк

define(MAX_FILE_SIZE, 35253235234); //константа вшитая в PHP, решение - прописать в кавычках т.е. строку 'MAX_FILE_SIZE'

$data = [
  NUMBERS => [1, 2, 3],           //константа вшитая в PHP, решение - прописать в кавычках т.е. строку 'NUMBERS'
  ACTIONS => [sum => '+', minus => '-'], //константа вшитая в PHP, решение - прописать в кавычках т.е. строки 'ACTIONS', 'sum', 'minus'
];


//2. Использование незаданных переменных, с этим сталкивался, расписывать не буду
//суть ошибки - обращаемся к переменной которая не объявлена и получаем ошибку уровня E_NOTICE
//для исправления используется isset($perem)... - проверка существования или объявить пустую переменную $perem = '';



//3. Использование глобальных переменных


$items = [1, 2, 3, 5, 7, 33];

function getSimpleNumber ($position = 0)
{
    global $items;                       //Плохой тон, граничащий с ошибкой

    if (isset($items[$position])) {
        return 0;
    }
    return $items[$position];
}
echo getSimpleNumber(4);

//Как решать:

$items = [1, 2, 3, 5, 7, 33];

function getSimpleNumber2 ($items, $position = 0) //Просто делаем глобальную переменную - параметром
{

    if (isset($items[$position])) {
        return 0;
    }
    return $items[$position];
}
echo getSimpleNumber2($items, 4); //и передаем этот параметр при вызове

//также более правильное решение

function getSimpleNumber3 ( $position = 0)
{
    $items = [1, 2, 3, 5, 7, 33]; //вставляем массив прямо в функцию

    if (isset($items[$position])) {
        return 0;
    }
    return $items[$position];
}
echo getSimpleNumber3(4);

//или создать 'подфункцию' для возврата нужного нам значения, вместо использования глобальной переменной, например

function GetSimpleNumbers ()
{
    $items = [1, 2, 3, 5, 7, 33]; //вставляем массив прямо в функцию
}

function getSimpleNumber4 ( $position = 0)
{
    $items = getSimpleNumbers(); // и вставляем функцию в функцию

    if (isset($items[$position])) {
        return 0;
    }
    return $items[$position];
}
echo getSimpleNumber4(4);


//4. Переопределение глобальных переменных
//Решение - поиск других решений для конкретного случая, однако переопределять глобальную переменную - оч плохая идея


//5. Переизбыток условий, вида:
//Если > Если > Если > ТО, Иначе > Если > Если ... и т.д.

//Выход: определить что действительно меняется и использовать тернарные операторы вида <?= ... ? ... : '' ? >



//6. Использование статичных значений в php вместо html?>
<option <?=($city = 'actualCity' ? 'selected' : '') . 'Ваш город: ' . '$city' . '</option>';//'Ваш город' нужно вывести в html


//7. Использование bolean-значений в переменных без необходимости
//Решение - класть в переменные само значение, а не делать лишнюю проверку через if else


//8. Проверка очевидного значения - когда значений два или одно и для этого пишется отдельная проверка - плохой тон


//9. Класть в переменную одного типа значения другого типа
$a = 10;
$a = true; //ошибка - зачем класть true в int



//10. Излишнее использование одноразовых переменных или на сленге 'Алиасов' - ака редирект, только в нашем случае бесполезный

$items = [
    [
        'name' => 'Предмет 1',
        'price' => '100'
    ],
    [
        'name' => 'Предмет 2',
        'price' => '37'
    ]
];

foreach ($items as $item) {
    $name = $item['name'];
    $price = $item['price'];
    //если добавляются ключи - добавляются и строки - ошибка и лишняя работа
    echo 'Товар'.$name.'по цене'.$price;
}


//Решение: избавится от таких переменных

foreach ($items as $item) {
    echo 'Товар'.$item['name'].'по цене'.$item['price'];
    //в данном случае просто обращаемся к ключу напрямую вместо создания лишнего кода
}


//11. Ошибочное использование функции, например array_search() когда в массиве 60 000 000 значений
//Причина: в данном случае это очень трудозатратно
//Решение - изучать используемые функции
?>