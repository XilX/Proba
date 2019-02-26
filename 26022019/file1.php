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


function get_arr($file)
{
    $matches = null;
    preg_match_all('/<post>(.*?)(<msg>(.*?)<\/msg>)(.*?)(<nik>(.*?)<\/nik>)(.*?)<\/post>/siu', $str, $matches);
    print_r($matches);
    $msg = $matches[3];
    $nik = $matches[6];

    $array = [];
    foreach ($msg as $key => $value) {
        $array[] = ['msg' =>$msg[$key], 'nik'=>$nik[$key]];
    }
    return $array;
}
    function pet_array_to_xml($array) {
        $str = "";
        foreach ($array as $value) {
            $str .= "<post>\n\t<msg>$value</>";
        }
    }
    $arr = get_arr(file_get_contents('file2.xml'));
    print_r($arr);
?>

</body>
</html>