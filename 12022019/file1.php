<?php

// echo preg_match_all('/\d{3}/', $_POST["textq"], $match2);
// echo preg_match_all('/x{1,3}/', $_POST["textq"], $match);
echo preg_match_all('/\/\*.*?\*\//', $_POST["textq"], $match3);
print_r($match3);
// print_r($match);
?>