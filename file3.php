<?php
$time_start = microtime(1);

for ($i=0; $i<1000; $i++) {
    //Ничего не делать. Повторить 1000 раз

}
$time_end = microtime(1);
$time = $time_end - $time_start;

echo "Ничего не делал $time секунд\n";



?>