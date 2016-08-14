<?php

// Anonymous Function (or) Clousure (or) Lambda


$greet = function($name)
{
    printf("Hello %s\r\n", $name);
};

$greet('World');
$greet('PHP');

var_dump(gettype($greet));

?>
