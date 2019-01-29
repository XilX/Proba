<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body><pre>
    <?php
    $arrayName = array ( 'one' => 1,
                         'two' => 2,
                         'ten' => 10,
                         'three' => 3 );
print_r($arrayName);
sort($arrayName);
print_r($arrayName);

for($i=0; $i<count($arrayName); $i++){
    for($j=$i+1; $j<count($arrayName); $j++){
        if($arrayName[$i]>$arrayName[$j]){
            $temp = $arrayName[$j];
            $arrayName[$j] = $arrayName[$i];
            $arrayName[$i] = $temp;
        }
   }         
}
?>

</pre>


</body>
</html>