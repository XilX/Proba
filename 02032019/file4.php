<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <textarea name="text"></textarea>
    <input type="submit">
    
    </form>
    <?php
// print_r ($_POST);
// echo ($_POST["text"]);
// $patterns = array ('/:\)/','/:\(/','/;\)/');
// $replace = array ('<img src="1.png" style="height: 35px;">', '<img src="2.jpg" style="height: 35px;">', '<img src="3.jpg" style="height: 35px;">');
// echo preg_replace($patterns,$replace,$_POST["text"]); 

$patterns ='/дурак|редиска/';
$replace ='<img src="4.jpg" style="height: 35px;">';
echo preg_match($patterns,$replace,$_POST["text"]);



?>
</body>
</html>