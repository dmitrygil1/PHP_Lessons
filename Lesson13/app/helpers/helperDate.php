<?php
namespace helperDate;

/**
* Функция возвращает текущий год в полном формате
* @return значение текущего года в формате string
*/

function getYear() : string {
    return date('Y');
};


/**
 * Функция возвращает дату - разницу между текущим днем и количеством дней в параметре
 * @param Количество дней
 * @return значение текущего года в формате string
 */
function getDateAgo(int $day = 0) : string {
    return date(SITE_DATE_FORMAT_SHORT, time()-$day*86400);
};

?>