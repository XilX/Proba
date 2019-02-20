<form action="" method="post">
    <input type="text" value="<?=$_POST['URL']?>">
    <input type="number" name="count" value="<?=$_POST['count']?>">
           <input type="submit" value="Отправить">
</form>


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
?>