<pre>
<?php
$today = getdate();
print_r($today);


echo "<Br>";

$months = array( 1 => 'Январь' , 'Февраль' , 'Март' , 'Апрель' , 'Май' , 'Июнь' , 'Июль' , 'Август' , 'Сентябрь' , 'Октябрь' , 'Ноябрь' , 'Декабрь' );
echo date( 'd ' . $months[date( 'n' )]);

?></pre>