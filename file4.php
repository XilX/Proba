<pre>
<?php
$today = getdate();
print_r($today);
echo "<Br>";
$weekday = array( 1 => 'Понедельник' , 'Вторник' , 'Среда' , 'Четверг' , 'Пятница' , 'Суббота' , 'Воскресенье');
echo date( 'd ' . $weekday[date( 'w' )]);
?></pre>