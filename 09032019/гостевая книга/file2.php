<?php

$str = "/*How are you ?*/ hello /*hello hello*/";
preg_match_all("/(\/\*)(.*?)(\*\/)/ui",$str,$matches);
print_r ($matches);

?>