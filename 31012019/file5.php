<html>

<head>
    <meta charset="UTF-8">
    <Title>Форма</Title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>

<body>
    <h2>Обратная связь</h2>
    <hr>
    <form action="" method="post">
        <label>Тема сообщения</label><br>
        <textarea name="comment" id="comment-field" rows="5" cols="40%"></textarea>
        <hr>
        <label>Как вас зовут ?</label>
        <h2></h2>
        <input type="text" name="fam" placeholder="Фамилия">
        <input type="text" name="name" placeholder="Имя">
        <input type="text" name="otch" placeholder="Отчество"> <br>
        <hr>
        <label>Ваш адрес электронной почты</label><br>
        <input type="text" name="mail" placeholder="Ваш email">
        <hr>
        <input type="submit" value="Отправить">
    </form>


    <?php
print_r ($_POST);
$str = $_POST["comment"] ."\n".
$_POST["fam"] . "\n".
$_POST["name"] . "\n".
$_POST["otch"] . "\n".
$_POST["mail"] . "\n\n\n"; 
file_put_contents("filetx.txt", file_get_contents("filetx.txt").$str);  



?>

</body>

</html>