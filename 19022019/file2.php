<?php
// $str = $_POST['text'];
// $pat = '/привет/';
// $rep = '<b>$0</b>';
// $str2 = preg_replace($pat,$rep,$str);
// echo $str2;

$str = $_POST['text'];
// $pat = array(   '/:\)/',
//                 '/;-\)/',
//                 '/:-\)/',
//                 '/O_o/',
//                 '/:3/'
//             );



// $rep = ['<b style="font-size: 25px; font-weight: 400; color: red;">$0</b>',
//     '<b style="font-size: 25px; font-weight: 400; color: yellow;">$0</b>',
//     '<b style="font-size: 25px; font-weight: 400; color: green;">$0</b>'];
// $rep = [
//         '<img src="1.png" style="height: 50px; width: 50px;">',
//         '<img src="2.png" style="height: 50px; width: 50px;">',
//         '<img src="3.jpg" style="height: 50px; width: 50px;">',
//         '<img src="4.jpg" style="height: 50px; width: 50px;">',
//         '<img src="5.jpg" style="height: 50px; width: 50px;">'
//         ];


// $str2 = preg_replace($pat,$rep,$str);

// echo $str2;
function bbcode($string){

    $pat = [
        '/\[b\](.*)\[\/b\]/',
        '/\[i\](.*)\[\/i\]/',
        '/\[u\](.*)\[\/u\]/',
        '/\[s\](.*)\[\/s\]/',
        '/\[img\](.*)\[\/img\]/'
    ];
    $rep = [
        '/<b>$1</b>/',
        '/<i>$1</i>/',
        '/<u>$1</u>/',
        '/<s>$1</s>/',
        '/<img src="$1" style="height: 50px; width: 50px;">$1</img>/'
    ];
    $str2 = preg_replace($pat, $rep, $string);
    return $str2;

}
echo bbcode($_POST['text']);

function smil($img){
    $pat = array(   
        '/:\)/',
    '/;-\)/',
    '/:-\)/',
    '/O_o/',
    '/:3/'
);
    $rep = [
        '<img src="1.png" style="height: 50px; width: 50px;">',
        '<img src="2.png" style="height: 50px; width: 50px;">',
        '<img src="3.jpg" style="height: 50px; width: 50px;">',
        '<img src="4.jpg" style="height: 50px; width: 50px;">',
        '<img src="5.jpg" style="height: 50px; width: 50px;">'
        ];
        $str3 = preg_replace($pat, $rep, $img);
        return $str3;
}
echo smil($_POST['text']);

function censour($string) {
    $pat = array(   
        '/дурак/',
    '/редиска/ui'
);
    $rep = [
        "*****","*******"
        ];
    
$str4 = preg_match_all($pat,$string);
return $str4;


}
echo censour($_POST['text']);
?>                           