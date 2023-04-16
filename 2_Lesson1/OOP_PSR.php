<?php

/*
 *Этот урок посвящён стандартам к ООП: PSR-1 и PSR-12
 *Данный файл является примером выполненного по стандарту PSR файла
 *Данный блок служит для комментариев к классу в случае ООП
 *Или для описания code style и иных вещей
 *
 *Правил куча, так что тут не расписываю. Но по-хорошему PSR стоит соблюдать. Последствия тебе знакомы...
*/

declare(strict_types=1);

namespace Vendor\Package;

use Vandor\Package\{Class as A, ClassB, Class as C};
use Vandor\Package\SomeNameSpace\Class0 as D;
use Vandor\Package\AnotherNameSpace\Class0 as E;

use function Vendor\Package\{FunctionA, functionB, functionC};
use function Another\Vendor\Package\FunctionA;

use const Vendor\Package\{CONST_A, CONST_B, CONST_C};
use const Another\Vendor\Package\CONST_D;

/*
 * FooBar is an example class
*/
class FooBar {
    //...PHP Code...
};

$bar = new FooBar();