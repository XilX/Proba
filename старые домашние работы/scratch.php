<pre><?php

//array_product

    $a = array(2, 4, 6, 8);

    echo array_product($a);
     $result = 1;
    foreach($a as $val) {
     $result *= $val;
    }
    echo $result;
    echo "<br>";

//array_sum

    echo array_sum($a);
     $result = 0;
    foreach($a as $val) {
     $result += $val;
    }
    echo $result;
    echo "<br>";

//array_search

    echo array_search(8, $a);
     foreach($a as $key=>$val) {
     if($val == 8) {
    echo $key;
    }
    }
    echo "<br>";

//in_array

    if (in_array(8, $a)) {
        echo "Нашел 8";
    }
    foreach($a as $val) {
        ($val == 8);
   }
    echo "<br>";

//array_reserve

    echo print_r(array_reverse($a));
     $size = count($a);
     $array = array();
    foreach($a as $val) {
     $size--;
     $array[$size] = $val;}
    print_r($array);
?></pre>