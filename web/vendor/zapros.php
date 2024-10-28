<?php
    require_once '../config/connect.php';
    $title = $_POST['title'];
    $text = $_POST['text'];
    $author = $_POST['author'];


    mysqli_query($connect, "INSERT INTO `statii` (`id_stat`, `title`, `text`, `author`) 
    VALUES (NULL, '$title', '$text', '$author')");
    header('Location: ../admin_panel.php');  //переадресация обратно на панель редактирования после отправления
?>