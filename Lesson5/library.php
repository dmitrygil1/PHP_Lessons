<?php
//  Домашка - упражнение

//  Легенда:
//  массив $library — это массив с авторами и книгами, который мы делали в предыдущих модулях;
//  переменная $title — это заголовок страницы библиотеки;
//  переменная $red типа boolean принимает случайным образом true или false.

//  Задание 1
//  Интегрируйте вёрстку этой страницы библиотеки:
//  выведите заголовок окна браузера в теге H1, взяв его из переменной $title;
//  в отдельных абзацах выведите книги в том же формате, что и в задании из предыдущего модуля: Книга <Название книги>, её написал <ФИО автора> <Год рождения автора> (<email автора>).
//  Реализуйте условие: если переменная $red истинна, необходимо к заголовку H1 добавить атрибут class="red", чтобы он выводился красным цветом.

//  Задание 2
//  названия книг выведите жирным начертанием и установите размер шрифта 16px;
//  email автора выведите в виде ссылки;
//  нечётные абзацы выделите отдельным классом и добавьте им сероватый цвет фона (#dddddd);
//  добавьте отступ всей странице по горизонтали — 40px слева и справа;
//  добавьте отступы 20px между книгами.

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

$title = 'Библиотека программиста';

$red = (bool) rand(0, 1);
//условие--------------------------------------------------------------------

//решение по условию---------------------------------------------------------
if ($red === true) {
    $redColor = '{color: red;}';
}

$numOfAuthors = (count($library['authors']));
//---------------------------------------------------------------------------
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($title) ?></title>
    <style type="text/css">body {margin: 0 40px}.book {font-size: 16px; margin-bottom: 20px} .book-grey {background-color: #dddddd} .red <?php echo $redColor?>; </style>
</head>
<body>
<h1 class="red"><?php echo ($title) ?></h1>
<div>Авторов на портале: <?php echo ($numOfAuthors) ?></div>

<!-- Выведите все книги -->
<?php
for ($i = 0; $i <= $numOfAuthors; $i++) {
    $bookName = $library['books'][$i]['title'];
    $authorKey = $library['books'][$i]['author'];
    $email = $library['authors'][$authorKey]['email'];
    $class = 'class="book"';
    if ($i % 2 == 0) {
        $class = 'class="book book-grey"';
    };
    echo ('<p '."$class".'> Книга <strong>"'.$bookName.'"</strong>, её написал '.
        $library['authors'][$authorKey]['name'].' '.
        $library['authors'][$authorKey]['birthYear'].' года рождения, для связи используйте почту: <a href="'."mailto: $email".'">'.$email.'</a></p>');
    };
?>
</body>
</html>
