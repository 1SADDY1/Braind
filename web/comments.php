
<!-- Файл с логикой комментария, использовался скорее для образца, так как итоговая форма в файле statii.php -->
 <!-- Здесь же  я настроил стили, и смотрел как они  вообще  будут смотреться и какую форму примут -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment</title>
</head>
<body>
    <style>
        body{
            font-family: Arial, sans-serif;
          
        }
        input, textarea, button {
            margin: 5px;
            border-radius: 10px;
            background-color: PeachPuff;
            width: 500px;
        }
        form  {
            display: flex;
            flex-direction: column;
            height: 200px;
        }
    </style>
<hr>
<h4>Ваш комментарий:</h4>
<!-- Форма для вставки данных из комментария в БД методом post -->
<form action="vendor/cr_comment.php" method="post">
    <input type="hidden" name="id_stat" value="<?= $st[0]; ?>" 
    <input type="text" name="user" placeholder="Ваше имя или никнейм:" required>
    <textarea name="comm" rows="10" cols="70" placeholder="Введите комментарий:" required></textarea>  
    <button type="submit">Лайк👍</button>
    <button type="submit">Дизлайк👎</button>
    <button  type="submit">Отправить</button>
</form>
<hr>
<h4>Комментарии:</h4>
<hr>
</body>
</html>