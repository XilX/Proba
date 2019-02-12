<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>
<div id="wrapper">
<?php


        // SUM /////////
        $text1 = explode(" ",$_POST["text1"]);

        function sum ($a,$b)
        {
            return $a+$b;
        }
            
        if (!empty($_POST["text1"]))
        {
            $res1 = call_user_func($text1[0], $text1[1], $text1[2]);
        }
        else {
            echo "Форма 1 не заполнена.";
        }


        // PRODUCT //////////////////////////////////////////////////////////////////////////////////////////////
        $text2 = explode(" ",$_POST["text2"]);
        
        function product ($a,$b)
        {
            return $a*$b;
        }

        if (!empty($_POST["text2"]))
        {
            $res2 = call_user_func($text2[0], $text2[1],$text2[2]);
        }
        else {
            echo "Форма 2 не заполнена.";
        }

        // POW //////////////////////////////////////////////////////////////////////////////////////////////
        $text3 = explode(" ",$_POST["text3"]);
        function power ($a,$b)
        {
            return pow($a,$b);
        }

        if (!empty($_POST["text3"]))
        {
            $res3 = call_user_func($text3[0], $text3[1],$text3[2]);
        }
        else {
            echo "Форма 3 не заполнена.";
        }
        // SUB //////////////////////////////////////////////////////////////////////////////////////////////
        $text4 = explode(" ",$_POST["text4"]);
        function sub ($a,$b)
        {
            return $a-$b;
        }

        if (!empty($_POST["text4"]))
        {
            $res4 = call_user_func($text4[0], $text4[1], $text4[2]);
        }
        else {
            echo "Форма 4 не заполнена.";
        }

        // SUM CLOS //////////////////////////////////////////////////////////////////////////////////////////////
        $text5 = explode(" ",$_POST["text5"]);        
        if (!empty($_POST["text5"]))
        {
            $res5 = call_user_func(function($a,$b){return $a+$b;}, $text5[1], $text5[2]);
        }
        else {
            echo "Форма 5 не заполнена.";
        }
        // PRODUCT CLOS //////////////////////////////////////////////////////////////////////////////////////////////
        $text6 = explode(" ",$_POST["text6"]);
        if (!empty($_POST["text6"]))
        {
            $res6 = call_user_func(function($a,$b){return $a*$b;} , $text6[1],$text6[2]);
        }
        else {
            echo "Форма 6 не заполнена.";
        }
    
        // POW CLOS //////////////////////////////////////////////////////////////////////////////////////////////
        $text7 = explode(" ",$_POST["text7"]);
        
    
        if (!empty($_POST["text7"]))
        {
            $res7 = call_user_func(function($a,$b){return pow($a,$b);} , $text7[1],$text7[2]);
        }
        else {
            echo "Форма 7 не заполнена.";
        }
        // SUB CLOS //////////////////////////////////////////////////////////////////////////////////////////////
        $text8 = explode(" ",$_POST["text8"]);
        
    
        if (!empty($_POST["text8"]))
        {
            $res8 = call_user_func(function ($a,$b){return $a-$b;}, $text8[1], $text8[2]);
        }
        else {
            echo "Форма 8 не заполнена.";
        }

?>
</div>

    <div id="wrapper">
        <fieldset>
            <form action="#" method="post">
                <h3>Введите название функции и два значения через пробел.</h3>
                <p>Реализованы пользовательские функции с названиями: sum, product, power, sub.</p>
                    <label>1: <input type="text" name="text1" placeholder="<?php for ($i=0; $i < count($text1); $i++) { echo $text1[$i]." "; }?>"></label><br>
                    <label>2: <input type="text" name="text2" placeholder="<?php for ($i=0; $i < count($text2); $i++) { echo $text2[$i]." "; }?>"></label><br>
                    <label>3: <input type="text" name="text3" placeholder="<?php for ($i=0; $i < count($text3); $i++) { echo $text3[$i]." "; }?>"></label><br>
                    <label>4: <input type="text" name="text4" placeholder="<?php for ($i=0; $i < count($text4); $i++) { echo $text4[$i]." "; }?>"></label><br>
                    <input type="reset" value="Очистить."><input type="submit" value="Узнать результат."><br>
                    <p>Результат 1: <?=$res1?></p>
                    <p>Результат 2: <?=$res2?></p>
                    <p>Результат 3: <?=$res3?></p>
                    <p>Результат 4: <?=$res4?></p>
                
            </form>
        </fieldset>
    </div>
</body>
</html>