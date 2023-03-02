<?php
//В данном уроке мы разберем стандарты PSR и стиль написания кода, они же - "правила хорошего кода", если можно

//Стандарты PSR - свод правил, придуманных для соблюдения единого стиля кода и упрощения жизни, как и пр. стандарты

//краткая сводка по стандаратам:


//-------------PSR1-------------
//- только UTF-8, теги только <?php и <?=,
//Без побочных эффектов в файле: т.е. в файле или только функция, или только выполняемый код, без месива

define('THIS IS A GOOD CONSTANT STYLE', true);//КОНСТАНТЫ_ТОЛЬКО_БОЛЬШИМИ_С_ПОДЖОПНИКОМ
$newsCount = 3;
$news = [];
$isActive = true;//переменныеТолькоКэмелКейс(верблюжатина)

function getNewsCount()//функцииТакжеТолькоКэмелКейс
{
    return 3;
}
function isCurrentDayIsFriday()
{
    return (bool)rand(0, 1);
}


//-------------PSR2-------------
//Ну первое - соблюдение PSR1
//Далее - не закрывать чистый php-файл закрывающими тегами. Можно для HTML
//Длинна строки не должна быть длиннее 80 символов, чтобы влезать в консоль разработчика
//в конце файла не должно быть пустых строк/пробелов                                              <-вот таких
//Не использовать несколько выражений в одной строке
//$a=1, $b=2   <-ошибка, нужно разносить
//Отступы: там куча правил, но вкратце - отсуп 4 пробела, закрывающие скобки без пробела
//вещи типа false, null, true - только нижний регистр, без NULL и пр.

//Описания функций
//Вот правильный формат:
function foo($arg1, $arg2, $arg3 = [])               //нет пробела перед ()
{                                                    //с новой строки
    //код
}

foo(LongVariableArgumentName1,                  //Длинные аргументы можно писать с новой строки, но толкьо каждый - с новой
    LongVariableArgumentName2,
    LongVariableArgumentName3                   //Запятая в конце не ставится
);


if ($a > $b) {
    //
} elseif ($a == $b) {

} else {

}



if ($exprl) {
    // тело if
} elseif ($expr2) {
    // тело elseif
} else {
    // тело else
}

switch (Sexpr) {
    case 0:
        echo 'First case, with a break';
        break;
    case 1:
        echo 'Second case, which falls through';
    // no break
    case 2:
    case 3:
    case 4:
        echo 'Third case, return instead of break';
        return;
    default:
        echo 'default case';
        break;
}

//И т.д. на подобии для всех функций


//Для замыкания
$closureWithArgs = function ($arg1, $arg2) {
    // тело
};
                                             I
$closureWithArgsAndVars = function ($argl, $arg2) use ($varl, $var2) {      //при это use идет на той же строке
    // тело
    $longArgsNoVars = function (                                         //Аналогично простым функциям с длинным названием
        $longArgument,
        $longerArgument,
        $muchLongerArgument
    ) use ($var1) {
        //тело
    };
};