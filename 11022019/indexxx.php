<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>

<?php
        $text1 = explode(" ",$_POST["text1"]);
        function sum ($a,$b)
        {
            return $a+$b;
        }  
        if (!empty($_POST["text1"]))
        {
            $res1 = call_user_func($text1[0], $text1[1], $text1[2]);
        }
    
        $text2 = explode(" ",$_POST["text2"]);
        function power ($a,$b)
        {
            return pow($a,$b);
        }
        if (!empty($_POST["text3"]))
        {
            $res3 = call_user_func($text2[0], $text2[1],$text2[2]);
        }
     
?>

            <form action="#" method="post">
                    <input type="text" name="text1" placeholder="<?php for ($i=0; $i < count($text1); $i++) { echo $text1[$i]." "; }?>"><br>
                   <input type="submit" value="Узнать"><br>
                    <p>Результат: <?=$res1?></p>
            </form>
</body>
</html>