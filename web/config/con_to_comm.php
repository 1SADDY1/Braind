<!-- Для удобства я прописал тут подключение к БД, чтоб постоянно его не искать -->

<?php
//Подключаемся к БД comment и прописываем текст для ошибки
    $con_to_comm = mysqli_connect('localhost', 'root', '', 'comment'); 
    if(!$con_to_comm) {
        die('Ошибка: не удалось подключиться');/*Здесь  прописана обработка ошибки к базе данных, если вдруг не получится то процессс завершится
        с сообщением 'Ошибка: не удалось подключиться' */
    }


?>