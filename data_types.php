<?php
$var1 = 42;
$var2 = "PHP is fun!";
$var3 = 4.56;
$var4 = true;
$var5 = null;
$var6 = array(1, 2, 3);
$var7 = array(
      "Hello", false, 99.99, 
      array(1=>10, 2=>20,3=>30)
   );
echo gettype($var1);  // Outputs: integer
echo "<br>";
var_dump($var1);      // Outputs: int(42)
echo "<br>";

echo gettype($var2);  // Outputs: string
echo "<br>";
var_dump($var2);      // Outputs: string(14) "PHP is fun!"
echo "<br>";

echo gettype($var3);  // Outputs: double
echo "<br>";
var_dump($var3);      // Outputs: float(4.56)
echo "<br>";

echo gettype($var4);  // Outputs: boolean
echo "<br>";
var_dump($var4);      // Outputs: bool(true)
echo "<br>";

echo gettype($var5);  // Outputs: NULL
echo "<br>";
var_dump($var5);      // Outputs: NULL
echo "<br>";

echo gettype($var6);  // Outputs: array
echo "<br>";
var_dump($var6);      // Outputs: array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }
echo "<br>";

echo gettype($var7);  // Outputs: integer
echo "<br>";
var_dump($var7);      // Outputs: int(42)
echo "<br>"; 
?>