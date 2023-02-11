<?php

$myArray = []; //пустой массив )5.4+ версия php
$alternative = array (); //пустой массив старой версии

var_dump($myArray);
var_dump($alternative);

$numberArray = [1,2,3,4];
$mixedType = ['mix',1,2];
var_dump ($numberArray);
var_dump ($mixedType);

//типы данных в массиве могут быть разными

//массив в котором ключи - это строки

$stringKeyArray = [
    "ID" => 138,
    "NAME" => "Юрий",
    "AGE" => 23,
    7788 => "Я - ключ с типом - число и значением - строка"
];

var_dump ($stringKeyArray);