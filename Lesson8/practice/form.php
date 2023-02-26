<?php
//-----------------------ЗАДАЧА: -----------------------
//сделать форму, в которой 10 + n = 15 и n вводит пользователь.
//10 b 15 задаются рандомно.
//Реализовать проверку на истинность, если решение верно или не верно - выдать уведомление на front

    require (__DIR__.'/controller.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Peшeниe задачи</title>
</head>
<body>
<h1>Решите задачу</h1>
<form method="POST" action="<?= $_SERVER['PHP_SELF'];?>" name="problem">
    <!-- ВАЖНО конструкция в action формы отправляет нас на эту же страницу PHP с методом POST-->
    <input type="hidden" value="<?php echo $sourceOperator1;?>" name="op1"/>
    <input type= "hidden" value="<?= $sourceSum; ?>" name="sum"/>
    <div>
        <span><?= $sourceOperator1; ?> +</span>
        <input type="text" value="<?= $sourceOperator2; ?>" size="2" name="op2"/>
        <span> = <?= $sourceSum; ?></span>
    </div>

    <div>
        <? if (isset($equationSring)): ?>
            <span><?=$equationSring ?></span>
        <? endif?>

        <? if (isset($success)): ?>
        <font color="green"><?= $success?></font>
        <? endif ?>

        <? if (isset($error)): ?>
            <font color="red"><?= $error?></font>
        <? endif ?>
    </div>

    <br/>
    <input type="submit" name="solve_problem" value="Готово!"/>
</form>
</body>
</html>
