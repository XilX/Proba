<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Обратный отсчёт</title>
</head>
<body><div id="wrapper">
        <form action="#" method="post" class="birthday">
            <input type="date" name="day" id="date"> 
            <input type="submit" value="Ok">
            <input type="reset" value="Reset">
        </form>
<?php
function calculate_age($birthday) {
    $birthday_timestamp = strtotime($birthday);
    $age = date('Y') - date('Y', $birthday_timestamp);
    return $age; }
echo "Годов: "; echo calculate_age($_POST['day']); echo "<br>";
function calculate_mounth($mou) {
    $birthday_timestamp = strtotime($mou);
    $mou = date('m') - date('m', $birthday_timestamp);
    return $mou; }
echo "Месяцев: "; echo calculate_mounth($_POST['day']); echo "<br>";
$a=mktime(0,0,0,1,30,2019);
$b=time();
$c=$a-$b;
echo $c;
?>
</div>
</body>
</html>