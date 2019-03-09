<?php
$str = $_POST['text'];
function get_array_from_xml ($str) {
    preg_match_all ('/<post>(.*?)(<msg>(.*?)<\/msg>)(.*?)(<nik>(.*?)<\/nik>)(.*?)<\/post>/ius', $str, $matches);
    $msg = $matches[3];
    $nik = $matches[6];
    $array = [];
    foreach ($msg as $k => $v) {
        $array[] = array ("msg" => $msg[$k], "nik" => $nik[$k]);
    }
    return $array;
}
function put_array_to_xml ($array) {
    $str = "";
    foreach ($array as $v) {
        $str .= "<post>\n\t<msg>$v[msg]</msg>\n\t<nik>$v[nik]</nik>\n</post>\n";
    }
    return $str;
}
function bbCode($string)
{
    $pat = [
        '/\[b\](.*)\[\/b\]/',
        '/\[i\](.*)\[\/i\]/',
        '/\[u\](.*)\[\/u\]/',
        '/\[s\](.*)\[\/s\]/',
        '/\[img\](.*)\[\/img\]/'
    ];
    $rep = [
        "<b>$1</b>",
        "<i>$1</i>",
        "<u>$1</u>",
        "<s>$1</s>",
        "<img src='$1' height=35px>"
    ];
    $str2 = preg_replace($pat, $rep, $string);
    return $str2;
}

function smile($img)
{
    $pat = [
        '/:\)/',
        '/:-\)/',
        '/;-\)/',
        '/0_o/',
        '/:p/',
        '/:\(/'
    ];
    $rep = [
        '<img src="book/img/1.jpeg" height=35px>',
        '<img src="book/img/2.jpg" height=35px>',
        '<img src="book/img/3.png" height=35px>',
        '<img src="book/img/4.jpg" height=35px>',
        '<img src="book/img/5.jpg" height=35px>',
        '<img src="book/img/6.jpg" height=35px>'
    ];
    $str3 = preg_replace($pat, $rep, $img);
    return $str3;
}

function censorship($string)
{
    $pat = '/дурак|редиска|нехорошее слово/iu';
    preg_match_all($pat, $string, $arr);
    return $arr[0];
}

function censorship2($string)
{
    $pat = '/дурак|редиска|нехорошее слово/ui';
    $rep = '<img src="book/img/censored.jpeg" height=35px>';
    $str4 = preg_replace($pat, $rep, $string);
    return $str4;
}

function markdown($string){
    $pat = ['/^#{4} (.*)$/m',
            '/^#{3} (.*)$/m',
            '/^#{2} (.*)$/m',
            '/^#{1} (.*)$/m',
            '/\*\*(.*)\*\*/m',
            '/\*(.*)\*/m',
            '/~~(.*)~~/m'
    ];
    $rep = ['<h4>$1</h4>',
            '<h3>$1</h3>',
            '<h2>$1</h2>',
            '<h1>$1</h1>',
            '<b>$1</b>',
            '<i>$1</i>',
            '<strike>$1</strike>'
    ];
    $str5 = preg_replace($pat, $rep, $string);
    return $str5;
}
?>