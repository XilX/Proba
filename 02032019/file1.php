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
<input type="text" name="email">
<input type="submit">
</form>


<?php

// print_r($_POST);

// preg_match_all('/h(..*?)o/', 'hello ho hto htto world hello hsadsao saw hqwesao dsjkadj', $matches);
// preg_match_all('/^hello$/', 'hello sad qw qdwsd qedw hello', $matches);
if ( preg_match_all('/^.{1,}@.{1,}\..{2,6}$/', $_POST["email"], $matches)) {

    echo '<font style="color: blue;">Проверка пройдена !</font>';
} else {
    echo '<font style="color: red;">Проверка NE пройдена !</font>';

}

// print_r($matches);
?>  
</body>
</html>



