<?php
    $name="Peter Parker";
    $age=21;
    $gpa=3.5;
    echo "Hello {$name} <br>";
    echo "You are {$age} years old <br>";
    echo "You secured {$gpa} gpa<br>";
    echo $name . "<br>";
    /**
     * A variable must start with a $ symbol, then its name.
     * The variable name must start with a letter or underscore (_).
     * A variable name cannot start with a number.
     * The variable name can contain letters, digits or underscores.
     * PHP is case sensitive, so $Name and $name are distinct variables.*/
   print "Hello " . $name . " How are you? \n";
   echo 'Hello ' . $name . ' How are you?<br>';
 
    $php = "a";
    $lang = "php";
    $World = "lang";
    $Hello = "World";
    $a = "Hello";
    echo '$a= ' . $a;
    echo "<br>";
    echo '$$a= ' . $$a;
    echo "<br>";
    echo '$$$a= ' . $$$a;
    echo "<br>";
    echo '$$$$a= ' . $$$$a;
    echo "<br>";
    echo '$$$$$a= ' . $$$$$a;
    echo '<br>';
?>