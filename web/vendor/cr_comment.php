<?php
    require_once '../config/con_to_comm.php';//Подключаем файл con_to_com с подключением
    //Получаем данные из  POST запроса
    $user = $_POST['user'];
    $comm = $_POST['comm'];
    $like_1 = $_POST['like_1'];
    $dislike = $_POST['dislike'];
    $id_stat = $_POST['id_stat'];

//Вставляем данные в БД с помощью функции mysqli_query
    mysqli_query($con_to_comm, "INSERT INTO `comments` (`id_user`, `user`, `comm`, `like_1`, `dislike`, `id_stat`) 
    VALUES (NULL, '$user', '$comm', '$like_1', '$dislike', '$id_stat');");
    header('Location: ../states.php');  //Переадресация на страницу со статьями
?>