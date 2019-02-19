<?php
echo mb_strlen('Привет', 'UTF-8'); // 6 символов

echo mbStrWordCount('Привет, как дела? Чем занят?'); // 5 слов

function mbStrWordCount($string = null) {
    return count(mb_split('[\s_"]', $string));
}
?>