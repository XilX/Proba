<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.csыs" type="text/css">
    <title>Document</title>
</head>
<body><div id="wrapper"><pre>
    <?php

    // $first = microtime(1);
    // $second;
    // $arr = [0=>'zero',1=>'one',2=>'two',4=>'four',5=>'five', 9=>'nine',7=>'seven',8=>'eight',6=>'six',3=>'three'];
    // $arr2 = $arr;
    // ksort ($arr);
    // print_r($arr);
    // asort ($arr2);


    $arr = [1,67,2,4,8,12,58,0,3,23];
    $arr2 = [1,67,2,4,8,12,58.3,0.3,3.3,23.3];
    $arr3 = [546,9687,1,564,5,2,4,66,5,74,6,2,14,6,74];
    $arr4 =[45,67,1,78,5,2,4,57,786,8,6,2,456,67,4778];


    // print_r($arr2);
    //сортировка по убыванию
    for ($i=0; $i < count($arr2); $i++) { 
        for ($j=$i+1; $j < count($arr2); $j++) { 
            if ($arr2[$i]<$arr2[$j]) {
                $buf = $arr2[$j];
                $arr2[$j] = $arr2[$i];
                $arr2[$i] = $buf;
            }
        }
    }

    
    // print_r($arr2);
    //сортировка по возрастанию
    $time_start = microtime(1);
    function sortpuz ($arr){
        for($i=0; $i<count($arr); $i++){
            for($j=$i+1; $j<count($arr); $j++){
                if($arr[$i]>$arr[$j]){
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $temp;
                }
            }         
        }
    print_r($arr);
    }


    sortpuz ($arr);
    sortpuz ($arr2);
    sortpuz ($arr3);
    sortpuz ($arr4);
    $time_end = microtime(1);
    $time = $time_end - $time_start;
    echo "Время сортировки массивов с помощью пользовательской функции: $time секунд".'<br>';
    
    
    $time_start2 = microtime(1);
    
    asort ($arr);
    print_r($arr);
    asort ($arr2);
    print_r($arr2);
    asort ($arr3);
    print_r($arr3);
    asort ($arr4);
    print_r($arr4);

    $time_end2 = microtime(1);
    $time2 = $time_end2 - $time_start2;

    echo "Время сортировки массивов с помощью встроенной функции: $time2 секунд".'<br>'.'<br>';

    echo "Сортировка встроенной функцией быстрее на ".(($time2/$time)*100)."%".'<br>'.'<br>';

    echo "Сортировка встроенной функцией занимает ".(($time2/($time2+$time))*100)."% общего времени сортировки.".'<br>'.'<br>';

    echo "Сортировка пользовательской функцией занимает ".(($time/($time2+$time))*100)."% общего времени сортировки.".'<br>'.'<br>';

    ?></pre></div>
</body>
</html>