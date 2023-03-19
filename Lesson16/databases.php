<?php
//-----------БАЗЫ ДАННЫХ-----------//

//Для подключения к БД:

//Если php>5.* проще всего использовать MYSQLI расширение т.к. оно доступно из коробки вместе с PHP
$host = 'localhost';//адрес сервера БД
$user = 'mysql';//Имя пользователя
$password = 'mysql';//пароль, но в таком виде его лучше не хранить
$dbname = 'mysql';//название БД

//создаем подключение к серверу БД
$connect = mysqli_connect($host,$user,$password,$dbname);

//обработчик ошибок при подключении к БД
if (mysqli_connect_errno()){
   echo mysqli_connect_error();
} else {

//Получаем информацию о типе используемого подключения
    echo mysqli_get_host_info($connect);
}
//Закрываем подключение, чтобы не нагружать сервер БД
mysqli_close($connect);

//Далее ознакомимся с языком MySQL в рамках PHPMyAdmin (SQL)

//Пример запроса на создание таблицы в БД
// CREATE TABLE Staff
// (
//    id INT,
//    name VARCHAR(255) NOT NULL,
//    position VARCHAR(30),
//    birthday Date
// );

//Посмотреть что мы создали:
// describe Staff;

//Переименовать таблицу
// ALTER TABLE products RENAME products_archive;

//Посмотреть список всех таблиц
// show tables;

//добавить столбец в таблицу:
// alter table products_archive add discount DECIMAL(10,2) NOT NULL;

//проверить, что мы добавили:
// DESCRIBE products_archive;

//Изменение столбца (имя или тип), в данном случае тип:
// alter table products_archive modify discount int not null;

//проверка изменений:
// DESCRIBE products_archive;

//Изменение названия и типа столбца:
// alter table products_archive change COLUMN discount duscount_new INT NULL;

//Удалить столбец
// ALTER TABLE products_archive DROP COLUMN duscount_new;

//Однако куда проще использовать интерфейс PHPMYAdmin - запросы обычно используют при сложных действиях или в коде

//Создание связи схоже по порядку с добавлением столбца
//создаем столбец, который будем связывать с другой таблицей
//Во вкладке связи выбираем этот столбец и столбец из другой таблицы
// задаем название и параметры:
// выбираем что делать при удалении и изменении (тоже изменять, ничего не делать, задавать Null, запретить изменения)
// проверяем запрос, сохраняем.


//ЭКСПОРТ И ИМПОРТ расписывать не буду т.к. уже подробно изучил данную тему при миграции БД на осн. месте работы на 1.5gb
//заметка: миграция через веб интерфейс, если БД>700мб - подключаешь консольные команды типа:
# mysqldump -u root -p --opt [database name] > database_name.sql