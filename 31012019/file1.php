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
    $arr= [['img4','img102','img20','img29','img10','img212','img214','IMG218'], 'img201','img2121','img131'];
    print_r($arr);
    natsort($arr);
    print_r($arr);
    natcasesort($arr);
    print_r($arr);
    array_multisort($arr);
    print_r($arr);
$array1 = array(1,3,2);
$array2 = array("Иванов","Петров","Сидоров");
$array3 = array('img921','img102','img20');
print_r($array1);
print_r($array2);
print_r($array3);
array_multisort($array1, $array2,$array3);
print_r($array1);
print_r($array2);
print_r($array3);
$ar = array(
    array("10", 11, 100, 100, "a"),
    array(   1,  2, "2",   3,   1)
   );
array_multisort($ar[0], SORT_ASC, SORT_STRING,
             $ar[1], SORT_NUMERIC, SORT_DESC);
var_dump($ar);
$array4 = array(1,1,1,3,2,5);
$array5 = array(5,6,2,3,2,3,5);

print_r($array4);
print_r($array5);

array_multisort($array4, SORT_ASC,
                $array5, SORT_DESC);

print_r($array4);
print_r($array5);
 

$a=(4>2)?"Да":"Нет";
   echo $a;
echo "<br>";
function cmp($a, $b)
{
    if(gettype($a)==gettype($b))
    {return ($a < $b) ? -1 : 1;}
    return(is_string($a)) ? 1 : -1;
}
$arra = array(5, '4', 3, '2', 1);

usort($arra,"cmp");

print_r($arra);

$arr2 = array(
	'one',
	'two',
	'three'
);
echo current($arr2)."<br>";
next($arr2);
echo current($arr2)."<br>";
reset($arr2);
echo current($arr2)."<br>";
end($arr2);
echo current($arr2)."<Br>";
echo "<Br>";

for($i=0; $i<count($arr2); $i++) {
	echo $arr2[$i],'<br>'; 
}
echo "<br>";
function sum($arra) {
$s=0;
foreach($arra as $value){
	$s=$s+$value;
}
return $s;
}

function sum2($arra) {
	$s=0;
	for($i=0; $i<count($arra); $i++) {
		$s = $s+$arra[$i];
	}
return $s;
}
echo sum($arra);
echo "<Br>";
echo sum2($arra);


?></pre>
</body>
</html>