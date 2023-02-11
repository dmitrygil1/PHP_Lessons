<?php

//string type of data
$helloworld = "Hello world!";
var_dump ($helloworld);

//bolean type of data
$bolean = true;
var_dump ($bolean);

//Числа int 

$decimlint = 150; //Десятиричная система счисления
$octimalint = 0123; //восьмиричная система
$hexadecimalint = 0xAF3; //шестнадцатиричная система

var_dump ($decimlint);
var_dump ($octimalint);
var_dump ($hexadecimalint);// все числа в итоге выводятся как десятичная система


//Числа double 
$double = 1.5;
var_dump ($double);

$power = 3.4e4; // 3.14 умноженное на 10 в 4 степени
$anotherPower = -1.34E-10; // -1.34 *10 в -10 степени

var_dump ($power);
var_dump ($anotherPower);

//смена значений
$stringToint = "Я - строка!";
var_dump ($stringToint);
$stringToint = 10;
echo "Меняем значение переменной и тип меняется сам";
var_dump ($stringToint);
?>