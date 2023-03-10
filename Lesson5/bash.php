<?php
//В данном уроке прогоним пару тем по php + освежим навык работы с git через $bash
//Инициализация или клонирование репозитория сложностей не вызвало

//Чтобы проверить состояние используется git status

//Чтобы сделать фиксацию используется git add /путь
//Также есть множество ключей к git add, Но судя по всему самым ходовым для меня будет git add -A (сейв всех изменений)

//Далее схема предельно проста:
// git status (просмотр изменений файлов)
// ↓
// git add /путь/файл.php (локальная фиксация этих изменений), альтернатива git add -A (фиксировать все измененные файлы)
// ↓
// git commit -m "Комментарий" (коммит к локальной фиксации)
// ↓
// git push (пуш локальной фиксации с коммитом)
// Важная заметка - git add и git push без коммита в дереве не видно, да и сам git push срабатывает только локально

