<?php
//Этот урок посвящен HTTP и GET/POST

//1)Структура протокола:

//Стартовая строка:
//    метод   адрес   протокол и версия
//    POST/seccurity/config HTTP/1.1;

//Самые популярные методы PHP - GET и POST
//GET - метод передается с помощью www.google.com/page/category?phones=12  - в конце метод GET
//- данный метод используется для запроса или передачи содержимого для указанного ресурса

//POST - метод, используемый для передачи пользовательских данных на сервер
//Заметка: данный метод обычно требует проверки передаваемых в него данных


//Далее используем программу POSTMAN
//ПРАКТИКА:

header ('Allow: GET, POST') ?>


<span>
    ТЕКСТ ОТВЕТА
    [{
    "key":"Date",
    "value":"Mon, 06 Mar 2023 20:59:30 GMT",
    "description":"A general header containing the date and time the message was sent.",
    "enabled":true,"disableEdit":true,
    "info":"A general header containing the date and time the message was sent."},
        {
        "key":"Content-Type",
        "value":"text/html;
        charset=UTF-8",
        "description":"Indicates the resource's media type.",
        "enabled":true,
        "disableEdit":true,
        "info":"Indicates the resource's media type."
    },{
        "key":"Content-Length",
        "value":"0",
        "description":"An entity header indicating the size of the entity-body, in bytes.",
        "enabled":true,"disableEdit":true,"info":"An entity header indicating the size of the entity-body, in bytes."
    },{
        "key":"Connection",
        "value":"keep-alive",
        "description":"A general header specifying whether the current network connection will stay open once the current transaction finishes.",
        "enabled":true,
        "disableEdit":true,
        "info":"A general header specifying whether the current network connection will stay open once the current transaction finishes."
    },{
        "key":"Keep-Alive",
        "value":"timeout=120",
        "description":"Custom header",
        "enabled":true,
        "disableEdit":true,
        "info":"Custom header"
    },{
        "key":"Server",
        "value":"Apache",
        "description":"Contains information about how the server handles requests.",
        "enabled":true,
        "disableEdit":true,
        "info":"Contains information about how the server handles requests."
    },{
        "key":"Allow",
        "value":"GET, POST",
        "description":"An entity header specifying the supported methods for a resource. Must be sent in response to an HTTP 405 - Method Not Allowed response.",
        "enabled":true,
        "disableEdit":true,
        "info":"An entity header specifying the supported methods for a resource. Must be sent in response to an HTTP 405 - Method Not Allowed response."
    }]
</span>

<?php
http_response_code(301);//Функция для принудительного выставления статуса
//Заметка: HTTP - небезопасный протокол передачи и все данные передаются в открытом виде


//HTTPS - безопасный протокол передачи, использующий SSL - сертификат для удостоверения безопасности