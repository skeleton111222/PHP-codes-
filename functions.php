<?php
echo "<h2>PHP Functions – All in One</h2>";

/* ================================
   1. Simple Function
================================ */
echo "<h3>1. Simple Function</h3>";

function greet() {
    echo "Hello, Welcome to PHP Functions!<br>";
}

greet();

/* ================================
   2. Function with Parameters
================================ */
echo "<h3>2. Function with Parameters</h3>";

function add($a, $b) {
    echo "Sum = " . ($a + $b) . "<br>";
}

add(10, 5);

/* ================================
   3. Function with Return Value
================================ */
echo "<h3>3. Function with Return Value</h3>";

function multiply($a, $b) {
    return $a * $b;
}

$result = multiply(4, 5);
echo "Multiplication = $result <br>";

/* ================================
   4. Default Parameter Function
================================ */
echo "<h3>4. Default Parameter Function</h3>";

function setName($name = "Guest") {
    echo "Hello, $name <br>";
}

setName();
setName("John");

/* ================================
   5. Function with Array Parameter
================================ */
echo "<h3>5. Function with Array Parameter</h3>";

function printArray($arr) {
    foreach ($arr as $value) {
        echo $value . " ";
    }
    echo "<br>";
}

$colors = ["Red", "Green", "Blue"];
printArray($colors);

/* ================================
   6. Anonymous Function
================================ */
echo "<h3>6. Anonymous Function</h3>";

$square = function($n) {
    return $n * $n;
};

echo "Square of 5 = " . $square(5) . "<br>";

/* ================================
   7. Recursive Function
================================ */
echo "<h3>7. Recursive Function</h3>";

function factorial($n) {
    if ($n == 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

echo "Factorial of 5 = " . factorial(5) . "<br>";

/* ================================
   8. Built-in Function Example
================================ */
echo "<h3>8. Built-in Functions</h3>";

echo "Length of string: " . strlen("PHP Programming") . "<br>";
echo "Uppercase: " . strtoupper("php") . "<br>";
echo "Random number: " . rand(1, 10) . "<br>";

?>
