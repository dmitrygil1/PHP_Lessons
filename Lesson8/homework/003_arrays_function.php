<?php
// Функции по работе с массивами дан уже знакомый вам массив авторов и книг

$library = [
    'authors' => [
        'john_makkormik@example.com' => [
            'name' => 'Джон Маккормик',
            'email' => 'john_makkormik@example.com',
            'birthYear' => 1972,
        ],
        'martin_robert@example.com' => [
            'name' => 'Мартин Роберт',
            'email' => 'martin_robert@example.com',
            'birthYear' => 1952,
        ],
        'martin_fauler@example.com' => [
            'name' => 'Мартин Фаулер',
            'email' => 'martin_fauler@example.com',
            'birthYear' => 1963,
        ],
    ],
    'books' => [
        [
            'title' => 'Чистый код: создание, анализ и рефакторинг',
            'author' => 'martin_robert@example.com',
            'year' => 2013,
        ],
        [
            'title' => 'Девять алгоритмов, которые изменили будущее',
            'author' => 'john_makkormik@example.com',
            'year' => 2011,
        ],
        [
            'title' => 'Идеальный программист',
            'author' => 'martin_robert@example.com',
            'year' => 2011,
        ],
        [
            'title' => 'Шаблоны корпоративных приложений',
            'author' => 'martin_fauler@example.com',
            'year' => 2002,
        ],
    ],
];


// 1. Используя подходящую встроенную функцию, извлеките из массива и выведите первого автора в библиотеке
// $firstAuthor = ...;
var_dump($firstAuthor);


// 2. Используя подходящую встроенную функцию, выберите и выведите последнюю книгу
// $lastBook = ...;
var_dump($lastBook);


// 3. Используя подходящую встроенную функцию, получите массив содержащий список email всех авторов
$emails = [];


// 3. Используя подходящую встроенную функцию, определите, есть ли среди этих email 'martin_fauler@example.com'
$hasMartinFauler = false;
var_dump($hasMartinFauler);


// 4. Используя подходящую встроенную функцию, определите, есть ли среди этих email 'vasya@example.com'
$hasVasyaPupkin = false;
var_dump($hasVasyaPupkin);


// 5. Используя подходящую встроенную функцию, добавьте в библиотеку еще одну книгу Мартина Фаулера
var_dump($library);


// 6. Используя подходящую встроенную функцию, добавьте в библиотеку на первую полку еще одну книгу Мартина Фаулера
var_dump($library);

