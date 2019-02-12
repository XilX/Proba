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
    include("math.php");
    ////////////////////////////////////////////
    function my_fun($x){
        return $x*$x;
    }
    $a = "my_fun";
    $b = "my_fun";
    $c = "my_fun";
    $d = "my_fun";
    echo $a(2).'<br>';
    echo $b(3).'<br>';
    echo $c(4).'<br>';
    echo $d(5).'<br>';

    ////////////////////////////////////////////
    function my_fun2($name){
        $name();
    }
    my_fun2 (function(){
        echo "Hello"."<br>";
    });

    ////////////////////////////////////////////
    $a=function($name){
        echo "Hello $name"."<br>";
    };

    $a("Piter");
    $b=$a;
    $b("Alex");

    ////////////////////////////////////////////

    function speed_test ($fun,$arg, $n=100000){
        $time1 = microtime(1);

        for ($i=0; $i < $n; $i++) { 
            $fun($arg);
        }
        $time2 = microtime(1);
        return $time2 - $time1;

    }

    // echo (2, 0.5);
    function my_sqrt($x){
        return pow($x, .5);

    }
    ////////////////////////////////////////////
    $arr4 =  [1,2,3,4,5,6,7,8,9];

    function my_array_sum($arr4) {
        static $s=0;
        for ($i=0; $i < count($arr4); $i++) { 
            $s = $s + $arr4[$i];
        }
        return $s;
    }
    ////////////////////////////////////////////
    function my_array_product2 ($arr4) {
        $s = 1;
        foreach ($arr4 as $value) { 
            $s = $s * $value;
        }
        return $s;
    }
    echo speed_test("sqrt",20);
    echo "<br>";
    echo speed_test("my_sqrt",20);
    echo "<br>";
    echo speed_test("array_sum",$arr4);
    echo "<br>";
    echo speed_test("my_array_sum2",$arr4);
    echo "<br>";
    echo speed_test("array_prod",$arr4);
    echo "<br>";
    echo speed_test("my_array_product2",$arr4);
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