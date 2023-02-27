<?php
// Функции по работе со строками

// 1. Уберите слеши "/" в начале и в конце строки, если они есть
$url = '/some/path/to/page/';
var_dump(trim("$url",'/'));

// 2. Уберите из строки все запятые и точки, а пробелы замените на тире
$line = 'Good news, everyone.';
$line1 = trim($line, ".");
$line2 = trim($line1, ",");
var_dump(str_replace(' ','-', $line2));

// 3. Посчитайте и выведите длину строки переменной $line
$length = 0;
$length = strlen($line);
var_dump($length);


// 4. Найдите на какой позиции находится запятая в строке $line и выведите это значение
$position = 0;
$position1 = strpos($line, ',');
var_dump($position1);//оказалось есть функция для этого

$position = explode(',',$line);
$position = strlen ($position[0]);
var_dump($position);


// 5. Вырежьте из строки $line подстроку после запятой до предпоследнего символа с конца
$resultLine = '';
$resultLine = substr($line, "$position1", $length);

var_dump($resultLine);

