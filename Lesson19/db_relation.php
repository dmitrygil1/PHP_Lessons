<?php
//Для наглядности данного урока использовался Workbench - IDE для удобной работы с MySQL
//Большую часть урока уже проходил в вузе, поэтому тезисно:

//Один к одному, один ко многим, многие ко многим
//Модели БД
//Workbench


//Атрибут - свойство описываемой сущности (по сути столбец таблицы)
//Кортеж - строка таблицы, объединяющая множество значений атрибутов (по сути строка)
//Отношение - множество кортежей (таблица)

//---------------------------НОРМАЛЬНЫЕ ФОРМЫ---------------------------//

//Нормальная форма базы данных – это набор правил и критериев, которым должна отвечать база данных.
//Каждая следующая нормальная форма содержит более строгие правила и критерии, тем самым приводя базу данных
//к определённой нормальной форме мы устраняем определённый набор аномалий.
//Отсюда можно сделать вывод, что чем выше нормальная форма, тем меньше аномалий в базе будет.

//---------------------------ПЕРВАЯ НОРМАЛЬНАЯ ФОРМА---------------------------//
//Все кортежи (строки) содержат только одно значение для каждого атрибута (столбца)
//Актуальная тема к слову: по сути это когда в столбце какое-то значение содержит:
// "recurrent_id=12, campaign_name=Alice,donor_email=dimas@mail.ru" и т.п. - так БД не делают

//---------------------------ВТОРАЯ НОРМАЛЬНАЯ ФОРМА---------------------------//
//Два условия: должна соблюдаться первая форма + все значения кортежа (строки) зависят от первичного ключа

//---------------------------ТРЕТЬЯ НОРМАЛЬНАЯ ФОРМА---------------------------//
//Все второстепенные данные, относящиеся к нескольким таблицам - хранить отдельно (Транзитивно)
//Транзитивная зависимость – это когда неключевые столбцы зависят от значений других неключевых столбцов.

//---------------------------3.5 НОРМАЛЬНАЯ ФОРМА---------------------------//
//-----------------------Нормальная форма Бойса-Кодда-----------------------//
//Два условия: соблюдение 3й формы + использовать только один первичный ключ
