<?php
echo "<h2>PHP Type Juggling vs Type Casting</h2>";

/* ===============================
   1. TYPE JUGGLING (Automatic)
================================ */
echo "<h3>Type Juggling (Automatic Conversion)</h3>";

$a = "10"; // string
$b = 5;    // integer

$c = $a + $b; // string + int → PHP converts "10" to 10 automatically
echo "\"$a\" + $b = $c<br>";
var_dump($c); // int(15)

$d = "5.5"; 
$e = 2;

$f = $d * $e; // string * int → PHP converts "5.5" to float
echo "\"$d\" * $e = $f<br>";
var_dump($f); // float(11)

$boolExample = 0; // integer
if ($boolExample) {
    echo "0 is true<br>";
} else {
    echo "0 is false (automatic boolean conversion)<br>";
}

/* ===============================
   2. TYPE CASTING (Manual)
================================ */
echo "<h3>Type Casting (Manual Conversion)</h3>";

$g = "10.75";
$h = (int)$g; // force string to integer
echo "(int)\"$g\" = $h<br>";
var_dump($h); // int(10)

$i = 5;
$j = (float)$i; // force int to float
echo "(float)$i = $j<br>";
var_dump($j); // float(5)

$k = 100;
$l = (string)$k; // force int to string
echo "(string)$k = $l<br>";
var_dump($l); // string("100")

$m = 0;
$n = (bool)$m; // force int to boolean
echo "(bool)$m = ";
var_dump($n); // bool(false)

/* ===============================
   3. MIXING BOTH
================================ */
echo "<h3>Mixing Type Juggling & Casting</h3>";

$x = "20"; // string
$y = 3;    // int

// PHP automatically converts string to int in arithmetic
$sum = $x + $y;
echo "\"$x\" + $y (juggling) = $sum<br>";

// Now cast $x to float manually before addition
$sum2 = (float)$x + $y;
echo "(float)\"$x\" + $y (casting) = $sum2<br>";
var_dump($sum2);

?>
