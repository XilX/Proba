<?php
include ("file1.php");
// echo bbcode("[b]hello[/b] [u]asq[/u] [i]hello[/i]");
// echo smile("hello,hello :) asjdska :) kjkasj :) :::::) :( ;) ias");
// echo markdown("# hello\n ыы \n## hello \n### hello");
// echo cens("дурак sajh редиска Дурак");

print_r (get_array_from_xml (file_get_contents("file2.xml")));
?>


