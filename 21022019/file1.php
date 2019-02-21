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
function get_msg_nik($file){
$getfile = file_get_contents('file2.xml');
$pat = '/<post.*?>(.*?)<\/post.?>/s';
$msg = '/<msg.*?>(.*?)<\/msg.?>/ui';
$nik = '/<nik.*?>(.*?)<\/nik.?>/ui';
$getstr = preg_match_all($pat, $getfile, $arr);
return $arr;
}

?></pre>
</body>
</html>

