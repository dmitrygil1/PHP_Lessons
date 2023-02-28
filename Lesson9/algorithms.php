<?php
// Урок по базовым алгоритмам

//1. Заменить переменные друг на друга

$a = 1;
$b = 5;

var_dump($a,$b);//1 и 5 соотв

//чтобы поменять их местами очевидно недостаточно просто $a=$b и $b=$a, для этого создаем сводную переменную (как в excel)

$tmp = $b;
$b = $a;
$a = $tmp;
var_dump($a,$b);//5 и 1 соотв

// но на php мы можем поступить проще записав переменные как значения массива
[$a,$b] = [$b,$a];
var_dump($a,$b);//1 и 5 соотв


//2. Посчитать сумму всех цифр в числе

$val = 123456789;
$sum = 0;

echo "Сумма цифр в числе $val равна: $sum"; //Сумма цифр в числе 123456789 равна: 0 - неверно

$number = $val;
//алгоритм: пока число >10
while  ($number>10) {

//суммируем остаток от деления на 10
    $sum +=$number % 10 ;
//делим число на 10
    $number = (int) ($number / 10);
//потом складываем то, что осталось
}
$sum += $number;
echo "Сумма цифр в числе $val равна: $sum"; //Сумма цифр в числе 123456789 равна: 45 - верно



//также можно ещё проще:

$val = 122212;
$sum = 0;
$number = $val;
//алгоритм: пока число > 0
while  ($number>0) {

//суммируем остаток от деления на 10
    $sum +=$number % 10 ;
//делим число на 10
    $number = (int) ($number / 10);
}

echo "Сумма цифр в числе $val равна: $sum"; //Сумма цифр в числе 123456789 равна: 10 - верно


//решение для php с помощью array_sum

$sum1 = array_sum(str_split((string)$val));

echo "Сумма цифр в числе $val равна: $sum1"; //Сумма цифр в числе 123456789 равна: 10 - верно


//3. Сколько раз встречается цифра в числе

$value = 123123124;
$count = [];//ответ

for ($i = 0; $i<10;$i++) {
    $count[] = 0;//Заполняем массив нулями
}
while ($value>0){
    $count[$value % 10]++;
    $value = (int) ($value/10);
}
var_export($count);//будет работать только для коротких чисел из-за особенностей хранения (int): если число длинное - оно преобр. в float
