<!-- Страница анонса статей-->
<!-- В ней реализовано подключение к БД, функция обрезки до 250 символов, добавлениее  ссылки, добавление троеточия -->
<?php
require_once __DIR__ . '/../config/connect.php';//Запрос к файлу подключения к  БД
/*У меня не  */
$anon = mysqli_query($connect, "SELECT * FROM `statii`");
$anon =  mysqli_fetch_all($anon);   
$maxLength = 250;


// Функция для обрезки анонса и его правильного редактирования
function limitText($text, $maxLength) {
    $text = substr($text, 0, $maxLength);//Обрезает текст начиная  от 0  до 250 символов
    $text = rtrim($text, '.!?');//Удаляет знаки препинания в конце, если они есть
    $text .= '...';//Добавляем троеточие для интриги с помощью конкатенации
    $text .= '<a href="../states.php">Читать дальше</a>';
    return $text;
}
?>

<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Statii</title>
</head>
<body>
<style>
 body {
   background-color: #FFF8DC;
 }
 h6 {
   color: black;
   font-family: Verdana, sans-serif;

 }
 p {
   color: black;
   font-family: Verdana, sans-serif;

 }
</style>
 <?php
 foreach($anon as $an){
     ?>
 <h1><?= $an[1]; ?></h1>
 <p><?= limitText($an[2], $maxLength); ?></p>
 <h1><?= 'Автор: ' . $an[3]; ?></h1>

 <?php
 }
?>
</body>
</html>