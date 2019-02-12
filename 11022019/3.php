<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
</head>
<body><div id="wrapper">
    <pre><?php
    $arr = [1,2,3,4,5,6,7,8,9,10];
    print_r($arr);

    ////////////////////////////////////////////////////////////////////////////////////////////////
    function my_array_map($function, $array){
        foreach ($array as $value) {
            $arr2[] = $function($value);
        } 
        return $arr2;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////
    $arr1 = my_array_map(function($x){return $x**$x;}, $arr);
    print_r($arr1);
    echo "<br>";

    $a1 = [1,-5,4,-2,6,-1,-5,-8,4,6,2,5,8];
    print_r($a1);
    echo "<br>";

    $a2 = array_filter($a1, function($x){return $x>=0;});
    print_r($a2);
    echo "<br>";

    ////////////////////////////////////////////////////////////////////////////////////////////////
    $name = ['Name','Antonio','Chuck','Dan','Piter','Alex','Alexandr'];
    print_r($name);
    $name2 = array_filter($name, function($x){return $x[0]=="P";});
    $name3 = array_filter($name, function($x){return $x[0]!=="N";});
    $name4 = array_filter($name, function($x){return $x[0]=="A" && $x[1]=="l";});
    $name5 = array_filter($name, function($x){if (strlen($x)<7) return $x;});
    echo "<br>";
    print_r($name2);
    echo "<br>";
    print_r($name3);
    echo "<br>";
    print_r($name4);
    echo "<br>";
    print_r($name5);

    ////////////////////////////////////////////////////////////////////////////////////////////////
    $walk = [1,2,3,4,5,6,7,8,9];
    print_r($walk);

    array_walk($walk, function($item, $key){echo "$key => $item<br>";});

    array_walk($walk, function(&$item, $key, $sp){ $item="$key $sp $item";},"-");
    print_r($walk);

    array_walk($walk, function(&$item, $key, $sp){ $item="$key $sp $item";},"=");
    print_r($walk);

    array_walk($walk, function(&$item, $key, $sp){ $item="$key $sp $item";},":");
    print_r($walk);

    array_walk($walk, function(&$item, $key, $sp){ $item="$key $sp $item";},"+");
    print_r($walk);

    ////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<br>";
    $msg = "Hello";
    $test = function()use($msg){
        echo $msg;
    };
    $msg = "bye";
    $test();
    echo "<br>";

    ////////////////////////////////////////////////////////////////////////////////////////////////
    $test = function()use(&$msg){
        echo $msg;
    };
    $msg = "bye";
    $test();
    echo "<br>";

    ////////////////////////////////////////////////////////////////////////////////////////////////
    function sum2 ($a,$b){
        return $a+$b;
    }
    echo "<br>";

    function sum5 ($a,$b,$c,$d,$e){
        return $a+$b+$c+$d+$e;
    }
    echo "<br>";
    echo call_user_func("sum2", 5,6);
    echo "<br>";
    echo call_user_func("sum5", 5,6,7,8,9);

    ////////////////////////////////////////////////////////////////////////////////////////////////
    $arr0 = [1,2,3,4,5,6,7,8,9];
    function sum6 ($a,$b,$c,$d,$e,$f){
        return $a+$b+$c+$d+$e+$f;
    }

    echo "<br>";echo "<br>";
    echo call_user_func_array("sum6", $arr0);


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
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    ?></pre>
</body>
</html>