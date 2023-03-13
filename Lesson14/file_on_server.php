<pre>
<?php
//Принцип загрузки файлов на сервер в PHP
//загрузка файла в форму
//отправка файла
//попадание во временную директорию
//проверка файла
//отправка в постоянную открытую директорию, к которой потом обращаются

var_dump($_FILES);

//Была ли нажата кнопка?
if (isset($_POST['upload'])) {
    $uploadPath = __DIR__;
    echo 'Файл будет перемещен в каталог:'.$uploadPath;
    if (!empty($_FILES['myfile']['error']))
    {
        echo 'Произошла ошибка';
    } else {
        move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadPath.$_FILES['myfile']['name']);
    }
}

?>
</pre>

<form enctype="multipart/form-data" method="post" action="<?=$_SERVER['PHP_SELF']?>">
    <span>Загрузите файл:</span>
    <input type="file" name="myfile" />
    <br/>
    <br/>
    <input type="submit" name="upload" value="Загрузить">
</form>

<!--ВАЖНО: такой вид загрузки файлов является ДЫРИЩЕЙ в безопасности и позволяет загрузить свой PHP и JS
без проверки файлы на сервер НИКОГДА НЕ ЗАГРУЖАТЬ
-->
