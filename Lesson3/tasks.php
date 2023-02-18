<?php
//-------------Домашка-------------//
/*
Цель домашнего задания
Научиться применять операторы и использовать выражения в своём коде.



Что входит в задание
Задание на применение операторов.
Задание на применение тернарного оператора.
Два задания на создание массива и вывод форматированной строки.


Советы и рекомендации
Описав массив в переменной, обязательно выведите его с помощью функции var_dump и проверьте, соответствует ли структура созданного массива той, что должна быть.


Задание 1


Что нужно сделать
Создайте два числа $number1 и $number2, поместив в них случайное число от 0 до 9 (используйте функцию rand(0, 10)).
Выведите сумму, разность, произведение и частное этих двух чисел.
Выведите результат сравнения этих чисел: больше, меньше, равно (boolean).
Выведите результат инкремента $number1.
Выведите результат прекремента $number2.


Советы и рекомендации
Каждое действие выполняйте на отдельной строке.

Что оценивается
Выполнены все требуемые операции с парой чисел и выведены результаты этих операций.
*/

$number1 = rand(0, 10);
$number2 = rand(0, 10);
var_dump('Первое число:'.$number1 .', Второе число:'. $number2);


var_dump($number1 + $number2);
var_dump($number1 - $number2);
var_dump($number1 * $number2);
var_dump($number1 / $number2);!

var_dump($number1 > $number2);
var_dump($number1 < $number2);
var_dump($number1 == $number2);


var_dump(++$number1);
var_dump(--$number2);

/*Задание 2



Что нужно сделать
Создайте ещё два числа: $daysBeforeExam — количество дней до экзамена, $daysToPrepareForExam — количество дней для подготовки к экзамену. Поместите в них случайное число от 0 до 9 (используйте функцию rand(0, 9)).
Используя тернарный оператор, определите, больше ли дней нужно на подготовку к экзамену, чем осталось до него. Если это так, выведите «Мне крышка». Если нет, выведите «Главное — не расслабляться».
Используя тернарный оператор, определите, меньше ли дней нужно на подготовку к экзамену, чем осталось до него. Если это так, выведите «Ууу, ещё успею в дотку поиграть». Если нет, выведите «Успею или не успею».
Используя тернарный оператор, определите, равное ли количество дней осталось до экзамена и на подготовку к нему. Если это так, выведите «Впритирочку». Если нет, выведите «Либо все плохо, либо очень плохо».


Советы и рекомендации
Каждое сравнение выполняйте и выводите на отдельной строке.



Что оценивается
Выполнены все требуемые сравнения с парой чисел и выведены результаты этих сравнений.
*/

$daysBeforeExam = rand(0, 9);
$daysToPrepareForExam = rand(0, 9);
echo "Дней до экзамена:".$daysBeforeExam.'<br>';
echo 'Дней на подготовку:'.$daysToPrepareForExam."<br>";
var_dump( $daysBeforeExam > $daysToPrepareForExam ? 'Главное — не расслабляться':'Мне крышка');

var_dump( $daysBeforeExam > $daysToPrepareForExam ? 'Ууу, ещё успею в дотку поиграть':'Успею или не успею');

var_dump( $daysBeforeExam == $daysToPrepareForExam ? 'Впритирочку':'Либо все плохо, либо очень плохо');
/*

Задание 3


Что нужно сделать
Создайте небольшой массив с данными об авторе и книге. Создайте многомерный ассоциативный массив $result1 с двумя ключами — 'author' и 'book':
в индекс (ключ) 'author' добавьте ассоциативный массив данных об авторе: ФИО, email;
в индекс (ключ) 'book' добавьте ассоциативный массив данных о книге: название и email автора.
Используя данные из созданного массива, сформируйте и выведите строку, подставив данные вместо блоков, обрамлённых решётками: #Фио автора# написал книгу, которая называется #Название книги#.
Используя данные из созданного массива, сформируйте и выведите строку, подставив данные вместо блоков, обрамлённых решётками: Автор #Фио автора# ждёт ваших отзывов, напишите ему на электронную почту #Email автора#.


Советы и рекомендации
Ответьте на вопрос: «А что, если мне придётся добавить ещё одно поле автору или книге — например, год рождения или год издания. Смогу ли я сделать это, значительно не меняя структуру массива?». Если добавление элемента выглядит лёгким, значит, структура правильна.
Попробуйте взять получившийся массив и мысленно вырезать из него автора. Структура оставшегося массива должна стабильно сохраниться.


Что оценивается
Массив $result1 должен содержать два элемента.
Каждый из подмассивов (автор или книга) должны содержать по два поля.
Стили оформления массивов должны быть соблюдены.
Должны быть сформированы строки по шаблонам с использованием оператора конкатенации. Данные должны подставляться из массива $result1.
*/

//Прописал массив с ключами вместо ассоциативного чтобы закрепить тему массивов в массивах
$result1 = [
    "author" =>
        [
        "NAME" => "Юрий Василиевич Масляков",
        "AGE" => 23,
        "MAIL" => "maslo@mail.ru"
    ],
    "book" =>
        [
        "ID" => 164,
        "NAME" => "Программы для чайников",
        "PAGES" => 230
    ]
];
var_dump($result1);

echo ($result1['author']["NAME"].' написал книгу, которая называется "'.$result1['book']["NAME"].'"');

echo ('Автор '.$result1['author']["NAME"].' ждёт ваших отзывов, напишите ему на электронную почту: '.$result1['author']["MAIL"]);
/*
Задание 4


Что нужно сделать
Расширим этот массив — создадим новый, в котором будет много авторов и много книг. Создайте новый многомерный массив $result2 с двумя ключами — 'authors' и 'books':
в индекс (ключ) 'authors' добавьте многомерный массив, каждый элемент которого является автором, т. е. ассоциативным массивом данных об авторе: ФИО, email (как в задании 3);
в индекс (ключ) 'books' добавьте многомерный массив, каждый элемент которого является книгой, т. е. ассоциативным массивом данных о книге: название и email автора (как в задании 3);
Создайте не менее двух авторов и не менее двух книг.
Используя данные из созданного массива, сформируйте и выведите строку, подставив данные вместо блоков, обрамлённых решётками: В нашей библиотеке точно есть две книги, которые вы ищете: #Название 1-й книги# и #Название 2-й книги#.
Используя данные из созданного массива, сформируйте и выведите строку, подставив данные вместо блоков, обрамлённых решётками:
Пожалуйста, перестаньте писать гневные письма на адрес нашего любимого автора #Фио 1-го автора# (#Email 1-го автора#). Пишите их лучше другому нашему автору — #Фио 2-го автора# (#Email 2-го автора#), мы его любим поменьше.


Советы и рекомендации
Попробуйте взять получившийся массив и мысленно вырезать из него автора. Структура оставшегося массива должна стабильно сохраниться.
Также мысленно попробуйте добавить ещё одного автора, а затем ещё и ещё. Каждое такое добавление должно быть представлено простым добавлением одинаковой структуры с данными.


Что оценивается
Массив $result2 должен содержать два элемента.
Подмассив авторов должен содержать не менее двух элементов.
Подмассив книг должен содержать не менее двух элементов.
Массив книг и массив авторов должен содержать обычные числовые ключи.
Каждый из подмассивов (автор или книга) должны содержать по два поля.
Стили оформления массивов должны быть соблюдены.
Должны быть сформированы строки по шаблонам с использованием оператора конкатенации. Данные должны подставляться из массива $result2.
 */


//тут замиксовал массивы ассоциативные массивы и массивы с ключами в качестве практики
$result2 = [
    "authors" =>
        [
            "author1" =>
                [
                    "NAME" => "Юрий Василиевич Масляков",
                    "AGE" => 23,
                    "MAIL" => "mihalov@mail.ru"
                ],
            "author2" =>
                [
                    "NAME" => "Петров Евгений Павлович",
                    "AGE" => 54,
                    "MAIL" => "volkov@mail.ru"
                ],
            "author3" =>
                [
                    "NAME" => "Юрий Василиевич Масляков",
                    "AGE" => 38,
                    "MAIL" => "buharev@mail.ru"
                ],
        ],
    "books" =>
        [
            ['Наказание тестировщика','volkov@mail.ru'],
            ['Дешёвый prod','mihalov@mail.ru'],
            ['Бинарный пожилой человек','buharev@mail.ru'],
        ]
];

var_dump($result2['books']);

echo ('В нашей библиотеке точно есть две книги, которые вы ищете: '.$result2['books']["0"]["0"].' и '.$result2['books']["1"]["0"]);


echo ('
Пожалуйста, перестаньте писать гневные письма на адрес нашего любимого автора '.$result2['authors']["author1"]["NAME"].' ('.$result2['authors']["author1"]["MAIL"].'). Пишите их лучше другому нашему автору — '.$result2['authors']["author2"]["NAME"].' ('.$result2['authors']["author2"]["MAIL"].')');