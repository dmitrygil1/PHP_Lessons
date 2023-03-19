<?php
//-----------Запросы к БД-----------//

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
    //создадим запрос и добавим значение в столбец name
    $result = mysqli_query(
        $connect,
    //Запрос на добавление в таблицу stock колонку name значений:
    //"insert into stock (name) values ('Большой склад'), ('Средний склад'), ('Малый склад')"

    // запрос на вывод всех столбцов и значений
    //"select * from stock"

    //Запрос на добавление значений в таблицу products:
    "INSERT INTO `products`(`name`, `description`, `price`, `count`, `stock_id`) VALUES ('Стол','Обеденный','4000','3','8')"
    );
    //проверка добавились ли параметры через insert
    var_export($result);

    //проверка при выводе всех столбцов
    // while ($row = mysqli_fetch_assoc($result))
    //    {
    //        echo '<p>';
    //        var_export($row);
    //        echo '</p>';
    //    };

}
//Закрываем подключение, чтобы не нагружать сервер БД
mysqli_close($connect);