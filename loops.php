<?php
/* ===============================
   1. For loop
================================ */
echo "<h3>For Loop:</h3>";
for ($i = 1; $i <= 5; $i++) {
    echo "The number is: $i <br>";
}

echo "<hr>"; 

/* ===============================
   2. While loop
================================ */
echo "<h3>While Loop:</h3>";
$i = 1;
while ($i <= 5) {
    echo "The number is: $i <br>";
    $i++;
}

echo "<hr>";

/* ===============================
   3. Do-While loop
================================ */
echo "<h3>Do-While Loop:</h3>";
$i = 1;
do {
    echo "The number is: $i <br>";
    $i++;
} while ($i <= 5);

echo "<hr>"; 

/* ===============================
   4. Foreach loop
================================ */
echo "<h3>Foreach Loop (Indexed Array):</h3>";
$colors = ["Red", "Green", "Blue"];
foreach ($colors as $color) {
    echo "$color <br>";
}

echo "<hr>"; 

/* ===============================
   5. Foreach Loop (Associative Array)
================================ */
echo "<h3>Foreach Loop (Associative Array):</h3>";
$person = ["name" => "John", "age" => 25, "city" => "New York"];
foreach ($person as $key => $value) {
    echo "$key: $value <br>";
}

echo "<hr>"; 

/* ===============================
   6. Using 'break' in a Loop
================================ */
echo "<h3>Using 'break' in a Loop:</h3>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;  // Exit the loop when $i equals 5
    }
    echo "The number is: $i <br>";
}

echo "<hr>"; 

/* ===============================
   7. Using 'continue' in a Loop:
================================ */
echo "<h3>Using 'continue' in a Loop:</h3>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;  // Skip the iteration when $i equals 5
    }
    echo "The number is: $i <br>";
}
?>