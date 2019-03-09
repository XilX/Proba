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
        Здравствуйте, <?=$_POST['surname']?> <?=mb_substr($_POST['name'],0,1,"UTF-8") ?>. <?=mb_substr($_POST['patronymic'],0,1,"UTF-8")?>.
        <?php
        $_SESSION['time_end'] = time();

        $time = $_SESSION['time_end']-$_SESSION['time_start'];
        echo 'С момента Вашей рагистрации прошло минут: '.(floor($time/60)).' ,секунд: '.($time%60);
       
        ?>
    </div>
</body>
</html>
