<?php
//-----------------Пример работы с БД-----------------//

//1. Коннект БД к PHPStorm
//2. Создание БД в IDE: условный магазин
//Продукты, производители, размеры, связь продукта и размера

//3.Создаем связи в БД для удобства
//4. Создаем запрос к БД -> от простого к сложному. Пример:
//4.1. Открываем консоль нашей БД
//4.2. Пишем SELECT * FROM DB_NAME
//4.3. Постепенно накидываем в запрос вводных (напр. с помощью LOFT JOIN
//4.4. Когда все вводные собраны в одну таблицу - удаляем вспомогательные данные

//5. Экранируем запросы к БД чтобы избежать инъекций к БД (когда в запрос могут
//попасть данные вида 'удали бд'. Экранируем всё: GET, POST, SESSION
//для mysql_connect нужно использовать:
//$product = mysql_real_escape_string($connection, $_POST['products']);
//
//для $pdo = new PDO()
// $pdo
//    ->preapre('SELECT * FROM products' ['product' => $_POST['product']])

//Пример самостоятельного SQL-запроса по теме:
//  SELECT p.*, m.name as manufacture_name, s.* FROM products AS p
//      left join manufactures as m on p.manufacture_id = m.id
//      left join product_size ps on p.id = ps.product_id
//      left join sizes as s on s.id = ps.size_id
//  WHERE s.size = 'XXL'


//-----------------ОРГАНИЗАЦИЯ ПОДЛКЮЧЕНИЯ К БД-----------------//

//учебная классика
$connection = mysqli_connect();

//...

function getProduct($connection, int $id) {
    mysqli_query($connection, "SELECT * FROM products WHERE product = $id");
}
//такая функция будет каждый раз обращаться к БД


//нормальный вариант подключения:

function connect() {
    //С помощью данных для connect в статической переменной можно организовать lazyload
    static $connection = null;
    if ($connection === null) {
        $connection = mysqli_connect() or die('mysql error');
    }
    return $connection;
}

//...

function getProductName(int $id) {
    mysqli_query(connect(), "SELECT * FROM products WHERE product = $id");
}

//...
getProductName(1);

mysqli_close(connect());