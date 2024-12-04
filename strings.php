<?php

$fname = 'Mohammed';
$lname = "Safadi";

$fullname = "$fname $lname";

/*echo <<<'EOT'
    Hello my name is "$fullname" \n
    I'm a PHP Developer!
    EOT;*/


echo str_ireplace(['m', 'a'], ['*', '-'], $fullname);