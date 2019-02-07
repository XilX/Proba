<?php

    $a = array(2, 4, 6, 8);

    // function my_array_sum($arr) {
    //     static $s=0;
    //     for ($i=0; $i < count($arr4); $i++){
    //         $s=$s+$arr[$i];
    //     }
    //     return $s;
    // }
  function speed_test($fun, $arg, $n=100000){
        $time1 = microtime(TRUE);

        for ($i=0; $i < $n ; $i++){
            $fun($arg);
        }
        
        $time2 = microtime(TRUE);

        return $time2 - $time1;
    }

// echo array_sum($a);
//  $result = 0;
// foreach($a as $val) {
//  $result += $val;
// }
// echo $result;
function my_array_sum($a){
    $result = 0;
    foreach($a as $val) {
     $result += $val;
    }
    return $result;
}
echo "<br>";
echo speed_test("array_sum", $a, 10000000);
echo "<br>";
echo speed_test("my_array_sum", $a, 10000000);


?>