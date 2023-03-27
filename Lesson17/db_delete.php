<?php
//DELETE DATA IN DB
$host = 'localhost';
$user = 'mysql';
$password = 'mysql';
$dbname = 'mysql';

$connect = mysqli_connect($host,$user,$password,$dbname);

if (mysqli_connect_errno()){
    echo mysqli_connect_error();
} else {

    $result = mysqli_query(
        $connect,
        "delete from products order by price desc limit 1"
//      удаление по параметру
//      "delete from products where id = '4'"
    );

//    проверка true/false
//    var_export($result);

//проверка при выводе всех столбцов
//     while ($row = mysqli_fetch_assoc($result))
//        {
//            echo '<p>';
//            var_export($row);
//            echo '</p>';
//        };

}
//Закрываем подключение, чтобы не нагружать сервер БД
mysqli_close($connect);