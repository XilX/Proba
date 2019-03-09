<?php
session_start();
$_SESSION['time_start'] = time();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div id="wrapper">
        <form action="index.php" method="post">
            Img:
            <select name="bgimg">
                <option value="css/fonbody.jpg">Pat1</option>
                <option value="css/fonbody2.jpg">Pat2</option>
                <option value="css/fonbody3.jpg">Pat3</option>
                <option value="css/fonbody4.jpg">Pat4</option>
            </select><br>
            Font: 
            <select name="font_color">
                <option value="black">Black</option>
                <option value="red">Red</option>
                <option value="green">Green</option>
                <option value="blue">Blue</option>
                <option value="silver">Silver</option>
            </select>
            <br>
                <input type="hidden" name="form_login" value="login"><br>        
                <input type="text" name="surname" placeholder="Введите фамилию" value="<?= (isset($_POST['surname'])) ? $_POST['surname'] : "Введите фамилию"?>"><br><br>
                <input type="text" name="name" placeholder="Введите имя" value="<?= (isset($_POST['name'])) ? $_POST['name'] : "Введите имя"?>"><br><br>
                <input type="text" name="patronymic" placeholder="Введите отчество" value="<?= (isset($_POST['patronymic'])) ? $_POST['patronymic'] : "Введите отчество"?>"><br><br>
                <input type="submit" value="Вход">
                <input type="reset" value="Сброс">
        </form>
    </div>
</body>
</html>