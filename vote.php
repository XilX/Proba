<?php
    echo "Столько символов в слове: ";
    echo mb_strlen('Привет', 'UTF-8'); // 6 символов

    echo "<br>";
    
    echo "Столько слов в тексте: ";
    echo mbStrWordCount('Привет, как дела? Чем занят?'); // 5 слов

    
    function mbStrWordCount($string = null) {
        return count(mb_split('[\s_"]', $string));
    }
?>