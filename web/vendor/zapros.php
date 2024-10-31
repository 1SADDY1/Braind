<?php
    require_once '../config/connect.php';//Подключаем файл connect с подключением
    //Получаем данные из  POST запроса

    $title = $_POST['title'];
    $text = $_POST['text'];
    $author = $_POST['author'];
    $id_stat = $_POST['id_stat'];

//Вставляем данные в БД с помощью функции mysqli_query
    mysqli_query($connect, "INSERT INTO `statii` (`id_stat`, `title`, `text`, `author`, `id_stat`) 
    VALUES (NULL, '$title', '$text', '$author', '$id_stat')");
    header('Location: ../admin_panel.php');  //переадресация обратно на панель редактирования после отправления

   

?>