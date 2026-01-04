<?php
/* ==================================================
   PHP OPERATORS – ALL IN ONE
================================================== */

/* ===============================
   1. Arithmetic Operators
================================ */
$x = 10;
$y = 2;

echo "<h3>Arithmetic Operators</h3>";
echo "{$x} + {$y} = " . ($x + $y) . "<br>";
echo "{$x} - {$y} = " . ($x - $y) . "<br>";
echo "{$x} * {$y} = " . ($x * $y) . "<br>";
echo "{$x} / {$y} = " . ($x / $y) . "<br>";
echo "{$x} % {$y} = " . ($x % $y) . "<br>";
echo "{$x} ** {$y} = " . ($x ** $y) . "<br>";

/* ===============================
   2. Increment / Decrement
================================ */
echo "<h3>Increment / Decrement</h3>";

echo "Post Increment x++ = ";
echo $x++;
echo "<br>";

echo "Pre Increment ++x = ";
echo ++$x;
echo "<br>";

echo "Post Decrement y-- = ";
echo $y--;
echo "<br>";

echo "Pre Decrement --y = ";
echo --$y;
echo "<br>";

/* ===============================
   3. Assignment Operators
================================ */
echo "<h3>Assignment Operators</h3>";

$a = 5;
echo "a = $a<br>";

$a += 2;
echo "a += 2 → $a<br>";

$a -= 1;
echo "a -= 1 → $a<br>";

$a *= 2;
echo "a *= 2 → $a<br>";

$a /= 3;
echo "a /= 3 → $a<br>";

$a %= 3;
echo "a %= 3 → $a<br>";

/* ===============================
   4. Comparison Operators
================================ */
echo "<h3>Comparison Operators</h3>";

$p = 10;
$q = "10";

var_dump($p == $q);  echo " ← Equal<br>";
var_dump($p === $q); echo " ← Identical<br>";
var_dump($p != $q);  echo " ← Not Equal<br>";
var_dump($p !== $q); echo " ← Not Identical<br>";
var_dump($p > 5);    echo " ← Greater Than<br>";
var_dump($p < 20);   echo " ← Less Than<br>";

/* ===============================
   5. Logical Operators
================================ */
echo "<h3>Logical Operators</h3>";

$trueVal  = true;
$falseVal = false;

var_dump($trueVal && $falseVal); echo " ← AND<br>";
var_dump($trueVal || $falseVal); echo " ← OR<br>";
var_dump(!$trueVal);             echo " ← NOT<br>";
var_dump($trueVal xor $falseVal);echo " ← XOR<br>";

/* ===============================
   6. String Operators
================================ */
echo "<h3>String Operators</h3>";

$s1 = "Hello";
$s2 = "PHP";

echo $s1 . " " . $s2 . "<br>";
$s1 .= " World";
echo $s1 . "<br>";

/* ===============================
   7. Array Operators
================================ */
echo "<h3>Array Operators</h3>";

$arr1 = ["a" => 1, "b" => 2];
$arr2 = ["b" => 3, "c" => 4];

print_r($arr1 + $arr2);
echo "<br>";

var_dump($arr1 == $arr2);  echo " ← Equal<br>";
var_dump($arr1 === $arr2); echo " ← Identical<br>";
var_dump($arr1 != $arr2);  echo " ← Not Equal<br>";

/* ===============================
   8. Conditional (Ternary)
================================ */
echo "<h3>Ternary Operator</h3>";

$age = 18;
echo ($age >= 18) ? "Adult<br>" : "Minor<br>";

/* ===============================
   9. Null Coalescing
================================ */
echo "<h3>Null Coalescing Operator</h3>";

$name = $_GET['name'] ?? "Guest";
echo "Name: $name<br>";

/* ===============================
   10. Spaceship Operator
================================ */
echo "<h3>Spaceship Operator</h3>";

echo "1 <=> 1 = " . (1 <=> 1) . "<br>";
echo "1 <=> 2 = " . (1 <=> 2) . "<br>";
echo "2 <=> 1 = " . (2 <=> 1) . "<br>";
/* ===============================
   11. Trenary Operator
================================ */
echo "<h3>Trenary Operator ? :</h3>";

$age = 18;
$status = ($age >= 18) ? "Adult" : "Minor";
echo $status;

/* ===============================
   Operator Precedence
================================ */
/*
()
**
* / %
+ -
*/
?>
