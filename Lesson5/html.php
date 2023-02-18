<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Повторяем основу по HTML и CSS в PHP</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div>
    div - блочный тег
    <p>p - тоже блочный текст</p>
    <p>
        <b>b - строчный тег, для выделения жирным</b>, его аналог <strong>strong</strong>
    </p>
    <p>
        <i>i - строчный тег, для выделения курсивом</i>
    </p>

</div>

<span>span - строчный тег</span>
<a href="https://go.skillbox.ru">a - ссылка, строчный тег</a> - Для этого тега важный атрибут href - в нем содержится url, куда ведет эта ссылка

<ul>
    <li>ul - блочный тег - это тег список, в него можно помещать другие теги</li>
    <li>li - блочный тег - это элемент списка</li>
</ul>

<hr>
hr - блочный одиночный тег, рисует полосу
<br>
br - блочный одиночный тег, перенос строки

<table border="1">
    <tr>
        <td colspan="2">table - блочный тег, он определяет таблицу</td>
    </tr>
    <tr>
        <td>tr - тег определяет строку в таблице</td>
        <td>td - тег определяет ячейку в строке таблицы</td>
    </tr>
</table>

<img src="https://go.skillbox.ru/skillbox.67bd066c94b3fecc38e4.svg" width="300" height="50">
img - строчный элемент, основной атрибут src - url картинки

<hr>
<form action="" method="post">
    <label>form - блочный элемент, для создания веб-формы на странице, содержит два основных атрибута action - url, на который форма будет отправлена и method="post" (или get) - способ, которым форма отправляется</label>

    <label>input- одиночный строчный блок, поле для ввода или кнопка или другой тип указанный в атрибуте type, атрибуты name - имя поля value - текущее значение</label>
    <input type="text" name="field1" value="Поле 1">
    <input type="submit" value="Отправить">
</form>

<hr>
script может быть подключен и в теге head, атрибут type - указывает тип скрипта, src - указывает путь откуда будет подгружен скрипт
<script type="text/javascript" src=".."></script>
</body>
</html>