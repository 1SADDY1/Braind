<!-- Страница с отображением всех стате сайта в виде ленты с комментами -->

<!-- Блок кода php делает запрос к БД "statii" для получения информации -->
<?php
   require_once 'config/connect.php';
   $stat = mysqli_query($connect, "SELECT * FROM `statii`");
   $stat =  mysqli_fetch_all($stat);   
   
   require_once 'config/con_to_comm.php';
   $comment = mysqli_query($con_to_comm, "SELECT * FROM `comments`");
   $comment =  mysqli_fetch_all($comment);   
   


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
  <h1 style="border: 3px solid gray; border-radius: 10px; color: DarkGreen">Новости и статьи</h1>
  <div class="spisok">
        <ul>
            <li><a href="main.php">Главная</a></li>
            <li><a href="http://localhost/web/states.php">Новости</a></li>
        </ul>

    </div>
  <hr style="border: 5px solid black; border-radius: 10px;">
  <style>
    /* Устанавливаем стили */
    body {
      background-color: #FFF8DC;
      margin: 5px;
      font-family: Arial, sans-serif;
    }
    h1 {
      color: black;
      font-family: Verdana, sans-serif;

    }
    p {
      color: black;
      font-family: Verdana, sans-serif;

    }
    input, textarea, button {
            margin: 10px;
            border-radius: 10px;
            background-color: PeachPuff;
            width: 300px;
        }
        form  {
            display: flex;
            flex-direction: column;
            height: auto;
            
        }
    
</style>
    <?php
    // Проходимся по массиву stat полученному из БД
    foreach($stat as $st){
      ?>
<!-- Добавляем блок stat для удобства редактирования и группировки -->
  <div class="stat" style="border: 3px solid black; margin: 5px">
    <!-- Вставляем название статьи, содержимое и автора -->
    <h1><?= 'Название: ' . $st[1]; ?></h1>
    <p><?= $st[2]; ?></p>
    <h1><?= 'Автор: ' . $st[3]; ?></h1>
    <!-- Закрываем блок -->
    </div>
    <!-- Создаём блок comment в котором бдует форма для заполнения коммента и его отправки -->
  <div class="comment">
    <h4>Ваш комментарий:</h4>
    <form action="vendor/cr_comment.php" method="post">
      <!-- Элемент содержит id статьи и передаёт его значение на сервер -->
       <!-- Позволяет сохранять инфу без отображения пользователю -->
    <input type="hidden" name="id_stat" value="<?= $st[0]; ?>" />
    <!-- Поле для имени, не закроется если пустое при помощи required -->
    <input type="text" name="user" placeholder="Ваше имя или никнейм:" required>
    <!-- Аналогично с комментом -->
    <textarea name="comm" rows="10" cols="70" placeholder="Введите комментарий:" required></textarea>  
    <button  type="submit">Отправить</button>
    </div>
    </form>
<hr>
<!-- Отображаем  комменты ниже  под постом -->
<h1>Комментарии:</h1>
<?php
// Проходимся по списку из комментов
    foreach($comment as $co){
      // Проверка на соответствиее id статьи, в обоих БД названа как id_stat
      if ($co[5] == $st[0]) {
        ?>
        <!-- Создаём блок com для  отображения комментов и стилистически их оформляем -->
    <div class="com" style="border: 3px solid gray; background-color: white; padding: 5px; margin: 5px 5px 0 5px;">
      <!-- Вставляем имя юзера -->
    <h1 style="margin: 0;"><a href="publications.php"> <?='Юзер: ' . $co[1]; ?></a></h1>    
    <!-- Сам текст коммента -->
    <p style="margin: 0;"><?= 'Комментарий: ' . $co[2]; ?></p>
    <!-- Вставляем форму для отправки данных методом пост и настраиваем стили -->
    <form action="vendor/cr_comment.php" method="post" style="margin-bottom: 5px">
      <!-- Передает идентификатор пользователя id юзера, значение берется из массива co -->
      <input type="hidden" name="id_user" value="<?= $co[0]; ?>" />
      <!-- Аналогично с id статьи -->
      <input type="hidden" name="id_stat" value="<?= $st[0]; ?>" />
      <!-- Кнопки лайков и дизлайков -->
      <button type="submit" name="like" value="like">Лайк👍<span><?= $co[3]; ?></span></button>
      <button type="submit" name="action" value="dislike" >Дизлайк👎<span><?= $co[4]; ?></span></button>
    </form>
    <?php
      }
      ?>
          
  </div>
    <?php
    }
?>
</div>
    <!-- Закрываем все открытые теги php и HTML -->
<hr>
    <?php
    }
?>

<hr>

</body>
</html>
