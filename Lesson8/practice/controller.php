<?php

//отслеживание в POST методах на бэке массива с 'solve_problem' в значениях
if (isset($_POST["solve_problem"])) {

    //Если такой массив найден - парсим его значения по ключам и записываем в переменные
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $sum = $_POST['sum'];

    //проверка вводимых данных (валидация)
    if (is_numeric($op1) && is_numeric($op2) && is_numeric($sum)) {
        $equationSring = '<br/>' . 'Ваш предыдущий пример:' . $op1 . ' + ' . $op2 . ' = ' . $sum . '<br/>'; //запоминаем строку с урвоанением (10 + 5 = 15

    // если сумма операторов равна переданной с бэка сумме
        if ($op1 + $op2 == $sum) {
            $success = "Вы успешно решили данную задачу";
        } else {
            $error = "Пересмотрите ваш ответ";
        }

    } else {
        $error = 'Введите число';
    }

};

//Если решена верно, либо не решалась вообще
if (!isset($error)) {
    $sourceOperator1 = rand(0, 10);
    $sourceOperator2 = '';
    $sourceSum = rand(0, 10);
} else {
    //иначе оставляем старые значения, пусть сидит, решает снова
    $sourceOperator1 = $op1;
    $sourceOperator2 = $op2;
    $sourceSum = $sum;
};