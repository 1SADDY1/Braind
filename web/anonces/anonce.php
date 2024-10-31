<!-- Страница анонса статей-->
<!-- В ней реализовано подключение к БД, функция обрезки до 250 символов, добавлениее  ссылки, добавление троеточия -->
<?php
require_once __DIR__ . '/../config/connect.php';//Запрос к файлу подключения к  БД
$anon = mysqli_query($connect, "SELECT * FROM `statii`");//Подключаекмся к БД где у 
$anon =  mysqli_fetch_all($anon);//Преобразуем информацию с БД в массив
$maxLength = 250;//устанавливаем макисмальную длину символов


//Определяюм функцию для обрезки текста  
function limitText($text, $maxLength) {
  $text = substr($text, 0, $maxLength);//Обрезаем текст от нуля до 250
  $words = explode(' ', $text);// Разбиваем текст на слова
  $lastWords = array_splice($words, -3);// Берем последние три слова и удаляем их из массива
  $text = implode(' ', $words);// Соединяем оставшуюся часть текста
  $text .= '<a href="states.php">'. implode(' ', $lastWords) . '...Читать дальше' . '</a>';  // Добавляем ссылку на последние три слова и троеточие

  return $text;
}
?>

<!-- Визуальное отображение страницы путём HTML кода -->
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Anonce</title>
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
     <hr>
 <h1><?= $an[1]; ?></h1>
 <p><?= limitText($an[2], $maxLength); ?></p>
 <h1><?= 'Автор: ' . $an[3]; ?></h1>
 <hr>
 <?php
 }

?>
</body>
</html>