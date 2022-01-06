<?php

$name = "reza";
$message = 'This is a long message';

//heredoc
$bio = <<<EOD
This is a lot of information.
Notice there is no single or double quotes.
Notice, intellisence highlights the text in green.
EOD;

//Escape Characters only function on the PHP part
// \n newline  == carriage return
// \t tab
// \\ escape the escape character
// \0 null

$bio2 =  "<pre>This is a lot of information. <br />
Notice there is no single or double quotes. 
Notice, intellisence highlights the text in green. \\n
</pre>";

echo $bio;
echo "<br />";
echo $bio2;