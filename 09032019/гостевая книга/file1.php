<?php
function smile($str) {
$patterns = array ("/\:\)/","/\:\(/","/\;\)/");
$replace = array ('<img src="1.png" width="25px">','<img src="2.jpg" width="25px">','<img src="3.jpg" width="25px">');
return preg_replace($patterns, $replace, $str);
}

function bbcode($str){
    $patterns = array (
                        "/\[b\](.*?)\[\/b\]/",
                        "/\[i\](.*?)\[\/i\]/",
                        "/\[u\](.*?)\[\/u\]/"
    
    );
    $replace = array (
                        '<b>$1</b>',
                        '<i>$1</i>',
                        '<u>$1</u>'
    );
    return preg_replace($patterns, $replace, $str);
}

function markdown($str){
    $patterns = array (
                        "/^###(.*?)$/miu",
                        "/^##(.*?)$/miu",
                        "/^#(.*?)$/miu"
    
    );
    $replace = array (
                        '<h3>$1</h3>',
                        '<h2>$1</h2>',
                        '<h1>$1</h1>'
    );
    return preg_replace($patterns, $replace, $str);
}

function cens($str){
    $patterns = "/дурак|редиска/ui";
    $replace = '<img src="4.jpg" width="55px">';
    return preg_replace($patterns, $replace, $str);
}

function get_array_from_xml($str) {

// echo $str;
preg_match_all("/<post>.*?<msg>(.*?)<\/msg>.*?<nik>(.*?)<\/nik>.*?<\/post>/mius", $str, $matches);
// preg_match_all("/<msg>(.*?)<\/msg>/mius", $str, $matches);
// print_r ($matches);
$arr = [];
 foreach ($matches[0] as $key => $value) {
    $arr[]=["msg"=>$matches[1][$key],"nik"=>$matches[2][$key]];
 }
return $arr;
}