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
        '/\[img\](.*)\[\/img\]/iu',
        '/\[url\](.*)\[\/url\]/iu',
        '/\[url\=(.*)\](.*)\[\/url\]/iu',
        '/\[code\](.*)\[\/code\]/iu',
        '/\[size\=(.*)\](.*)\[\/size\]/iu',
        '/\[color\=(.*)\](.*)\[\/color\]/iu',
        '/\[quote\](.*)\[\/quote\]/iu',
        '/\r\n/'
    );
    $replace = array(
        '<b>$1</b>',
        '<i>$1</i>',
        '<u>$1</u>',
        '<img src="$1">',
        '<a href="$1">$1</a>',
        '<a href="$1">$2</a>',
        '<pre>$1</pre>',
        '<span style="font-size: $1">$2</span>',
        '<span style="color: $1">$2</span>',
        '<blockquote><p>$1</p></blockquote>',
        '<br>'
    );
    $text = preg_replace($pattern, $replace, $text);
    return $text;
}

function smileEncode($text)
{
    $pattern = array(
        '/\[devil\]/iu',             /* демон */
        '/\[punish\]/iu',            /* палач */
        '/\[blame\]/iu',             /* виноват */
        '/\[delight\]/iu',           /* восхищение */
        '/\[happy\]/iu',             /* довольный */
        '/\[deem\]/iu',              /* думаю */
        '/\[evil\]/iu',              /* злой */
        '/\[bold\]/iu',              /* крутой */
        '/\[hysterics\]/iu',         /* истерика */
        '/\[chief\]/iu',             /* начальник */
        '/\[no\-savvy\]/iu',         /* не знаю */
        '/\[excuse\]/iu',            /* оправдание */
        '/\[bruise\]/iu',            /* синяк */
        '/\[surpris\]/iu',           /* удивлен */
        '/\[hugs\]/iu',              /* обнимашки */
        '/\[confus\]/iu',            /* смущен */
        '/\[sleepy\]/iu',            /* сонный */
        '/\[tired\]/iu',             /* устал */
        '/\[v\-evil\]/iu',           /* очень злой */
        '/\[no\-look\]/iu',          /* не смотрю */
        '/\[no\-happy\]/iu',         /* не довольный */
        '/\[v\-guilty\]/iu',         /* очень виноват */
        '/\[evil\-grin\]/iu',        /* злобная ухмылка */
        '/\[unick\-1\]/iu',          /* уникальный 1 */
        '/\[unick\-2\]/iu'           /* уникальный 2 */
    );
    $replace = array(
        '<img src="images/smiles/devil.png" alt="devil" class="smile">',
        '<img src="images/smiles/punish.png" alt="punish" class="smile">',
        '<img src="images/smiles/blame.png" alt="blame" class="smile">',
        '<img src="images/smiles/delight.png" alt="delight" class="smile">',
        '<img src="images/smiles/happy.png" alt="happy" class="smile">',
        '<img src="images/smiles/deem.png" alt="deem" class="smile">',
        '<img src="images/smiles/evil.png" alt="evil" class="smile">',
        '<img src="images/smiles/bold.png" alt="bold" class="smile">',
        '<img src="images/smiles/hysterics.png" alt="hysterics" class="smile">',
        '<img src="images/smiles/chief.png" alt="chief" class="smile">',
        '<img src="images/smiles/no-savvy.png" alt="no-savvy" class="smile">',
        '<img src="images/smiles/excuse.png" alt="excuse" class="smile">',
        '<img src="images/smiles/bruise.png" alt="bruise" class="smile">',
        '<img src="images/smiles/surpris.png" alt="surpris" class="smile">',
        '<img src="images/smiles/hugs.png" alt="hugs" class="smile">',
        '<img src="images/smiles/confus.png" alt="confus" class="smile">',
        '<img src="images/smiles/sleepy.png" alt="sleepy" class="smile">',
        '<img src="images/smiles/tired.png" alt="tired" class="smile">',
        '<img src="images/smiles/v-evil.png" alt="v-evil" class="smile">',
        '<img src="images/smiles/no-look.png" alt="no-look" class="smile">',
        '<img src="images/smiles/no-happy.png" alt="no-happy" class="smile">',
        '<img src="images/smiles/v-guilty.png" alt="v-guilty" class="smile">',
        '<img src="images/smiles/evil-grin.png" alt="evil-grin" class="smile">',
        '<img src="images/smiles/unick-1.png" alt="unick-1" class="smile">',
        '<img src="images/smiles/unick-2.png" alt="unick-2" class="smile">'
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
