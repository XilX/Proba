<?php

function markdownEncode($text)
{
    $pattern = array(
        '/^# (.*)$/ium',
        '/^#{2} (.*)$/ium',
        '/^#{3} (.*)$/ium'
    );
    $replace = array(
        '<h1>$1</h1>',
        '<h2>$1</h2>',
        '<h3>$1</h3>'
    );
    $text = preg_replace($pattern, $replace, $text);
    return $text;
}

function bbCodeEncode($text)
{
    $pattern = array(
        '/\[b\](.*)\[\/b\]/iu',
        '/\[i\](.*)\[\/i\]/iu',
        '/\[u\](.*)\[\/u\]/iu',
        '/\r\n/'
    );
    $replace = array(
        '<b>$1</b>',
        '<i>$1</i>',
        '<u>$1</u>',
        '<br>'
    );
    $text = preg_replace($pattern, $replace, $text);
    return $text;
}

function smileEncode($text)
{
    $pattern = array(
       
        '/\[happy\]/iu',           
        
        '/\[evil\]/iu',             
        '/\[good\]/iu',   
        '/\[php\]/iu',   
        '/\[no\-happy\]/iu'        
    );
    $replace = array(
      
        '<img src="happy.png" alt="happy" class="smile" style="width: 35px; height: 50px;">',
        '<img src="el.gif" alt="php" class="smile">',
        '<img src="evil.jpg" alt="evil" class="smile" style="width: 35px; height: 50px;">',
        '<img src="good.png" alt="evil" class="smile" style="width: 35px; height: 50px;">',
       
        '<img src="no-happy.png" alt="no-happy" class="smile" style="width: 35px; height: 50px;">'
        
    );
    $text = preg_replace($pattern, $replace, $text);
    return $text;
}

function specChars($text)
{
    $text = htmlspecialchars(trim($text));
    return $text;
}

function censurFind($text)
{
    $censur = 0;
    $pattern = explode("\r\n",file_get_contents('libs/censur.db'));
    foreach ($pattern as $value) {
        $censur += preg_match_all('/'.$value.'\b/iu', $text);
    }
    return $censur;
}

function getAllFeedback()
{
    $feed_array = explode("--end-->>\r\n", file_get_contents('libs/feedback.db'));
    foreach ($feed_array as $value) {
        $feedback[] = explode('|=>|', $value);
    }
    return $feedback;
}

function addFeedback($name, $feed)
{
    if (censurFind($feed) or censurFind($name)) {
        return 'Ваш отзыв отклонен, за использование ненормативной лексики.';
    } else {
        $name = specChars($name);
        $feed = smileEncode(bbCodeEncode(markdownEncode(specChars($feed))));
        $date = date("d.m.Y H:i:s");
        file_put_contents('libs/feedback.db', $name . '|=>|' . $feed . '|=>|' . $date . "--end-->>\r\n" . file_get_contents('libs/feedback.db'));
        return 'Ваш отзыв успешно добавлен.';
    }
}
array