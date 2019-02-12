<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
    <title>Document</title>
</head>
<body><div id="wrapper">
    <?php
    include ("math.php");
    ////////////////////////////////////////////

    function speed_test ($fun,$arg, $n=100000){
        $time1 = microtime(1);
        for ($i=0; $i < $n; $i++) { 
            $fun($arg);
        }
        $time2 = microtime(1);
        return $time2 - $time1;
    }
    $arr4 = [1,2,3,4,5,6,7,8,9];
    echo "Время работы array_sum ".speed_test("array_sum",$arr4);
    echo "<br>";
    echo "Время работы my_array_sum2 ".speed_test("my_array_sum2",$arr4);
    echo "<br>";
    echo "array_sum быстрее в ".((speed_test("my_array_sum2",$arr4))/(speed_test("array_sum",$arr4)))." раз(а)";
    echo "<br>"."<br>";

    echo "Время работы array_product ".speed_test("array_product",$arr4);
    echo "<br>";
    echo "Время работы my_array_product2 ".speed_test("my_array_product2",$arr4);
    echo "<br>";
    echo "array_sum быстрее в ".((speed_test("my_array_product2",$arr4))/(speed_test("array_product",$arr4)))." раз(а)";
    echo "<br>"."<br>";


    echo "Время работы array_reverse ".speed_test("array_reverse",$arr4);
    echo "<br>";
    echo "Время работы my_array_reverse2 ".speed_test("my_array_reverse2",$arr4);
    echo "<br>";
    echo "array_sum быстрее в ".((speed_test("my_array_reverse2",$arr4))/(speed_test("array_reverse",$arr4)))." раз(а)";
    echo "<br>"."<br>";

    echo "Время работы array_keys ".speed_test("array_keys",$arr4);
    echo "<br>";
    echo "Время работы my_array_keys2 ".speed_test("my_array_keys2",$arr4);
    echo "<br>";
    echo "array_sum быстрее в ".((speed_test("my_array_reverse2",$arr4))/(speed_test("array_reverse",$arr4)))." раз(а)";
    echo "<br>"."<br>";

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    ?>
</body>
</html>