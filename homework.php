<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="URL" value="<?=$_POST['URL']?>">
           <input type="submit" value="Отправить">
</form>
</body>
</html>
<?php
if (isset($_POST['URL']) and $_POST['URL'] != '') {
    $content = file_get_contents($_POST['URL']);
    preg_match('/\<body\>(.*)\<\/body\>/s',$content,$match);
    $content = $match[0];
    $content = preg_replace('/\<script.*\>.*\<\/script\>/siU','',$content);
    $content = preg_replace('/\&.*\;/siU','',$content);
    $content = preg_replace('/\<.*\>/siU','',$content);
    $content = htmlspecialchars($content);
}
    for($i=1;$i<36;$i++) {
        echo $i." букв: ";
        $count = preg_match_all('/\b\w{' .$i. '}\b/u',$content,$match,PREG_PATTERN_ORDER);
        echo $count.'<br>';
    }
?>