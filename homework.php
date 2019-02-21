<form action="" method="post">
    <input type="text" name="URL" value="<?=$_POST['URL']?>">

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
<?php
    for($i=1;$i<10;$i++) {
        echo "Слов с ".$i." буквой: ";
        $count = preg_match_all('/\b\w{' .$i. '}\b/u',$content,$match,PREG_PATTERN_ORDER);
        echo $count.'<br>';
    }
?>