<!-- Страница где собраны все комментарии пользователей -->
<?php
 require_once 'config/connect.php';
 $stat = mysqli_query($connect, "SELECT * FROM `statii`");
 $stat =  mysqli_fetch_all($stat);   
//  Подключаемся к БД для оперирования даннымии из них
 
 require_once 'config/con_to_comm.php';
 $comment = mysqli_query($con_to_comm, "SELECT * FROM `comments`");
 $comment =  mysqli_fetch_all($comment);   
?>
<!-- Форма для отображения информации в более человеческом виде -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publications</title>
</head>
<body>
    <style>
        h1, ul, h2{
            font-family: Verdana, sans-serif;
        }
        body{
            background-color: #FFF8DC;
        }
    </style>
<h1 style="border: 3px solid gray; color:black">Комментарии пользователя</h1>
  <div class="spisok">
        <ul>
            <li><a href="main.php">Главная</a></li>
            <li><a href="http://localhost/web/states.php">Новости</a></li>
        </ul>

    </div>
  <hr style="border: 2px solid black; border-radius: 10px;">
  <?php
// Создаём массив для хранения комментариев по пользователям
$user_comments = [];

// Группируем комментарии по пользователям
foreach ($comment as $co) {
    $user_comments[$co[1]] = $co; // $co['user'] — имя пользователя из комментария
}

// Проходим по каждому пользователю и выводим его комментарии
foreach ($user_comments as $user => $co) {
    ?>
    <h2>Комментарии пользователя {<?= $co[1] ?>} :<?= $co[2] ?></h2>

    <?php
    foreach ($stat as $st) {
        // Находим статью, к которой относится комментарий
        foreach ($stat as $st) {
            if ($st[0] === $co[2]) { // Сравниваем идентификаторы статьи и комментария
                echo "<h3>Статья: " . ($st[1]) . "</h3>";
                echo "<p>Комментарий: " . ($co[2]) . "</p>";
                echo "<hr>";
            }
        }

        
    }
?>
    </div>
<?php
    }
?>

</body>
</html>