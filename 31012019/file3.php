<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        th {
        background-color: silver;
        }
    </style>
</head>

<body>




    <?php
$arr = array (
    "Rank" => array (1,2,3,4,5,6,7,8,9,10),
    "Language" => array ("Python","Java","JavaScript","Html","Css","C++","Ruby","C","C#","Go"),
    "Popularity" => array(16,2,4,5,6,7,8,9,1,2),
    "Source" => array(12,2,3,4,5,6,7,8,9,12) 
);
// print_r ($arr);
$arrkey = array_keys ($arr);

print_r ($arrkey);
?>




    <table border="1">
        <?php
echo "<table border='1'>";
echo "<tr>";
 for ($i=0; $i<=3; $i++) {
     echo "<th>".$arrkey[$i]."</th>";

 }
echo "</tr>";
for ($i=0; $i<=9; $i++) {
    echo "<tr><td>".$arr["Rank"][$i]."</td><td>".$arr["Language"][$i]."</td><td>".$arr["Popularity"][$i]."</td><td>".$arr["Source"][$i]."</td></tr>";

}


?>
    </table>
</body>

</html>