<?php
echo "<h2>PHP Arrays – All in One</h2>";

/* ================================
   1. Indexed Array
================================ */
echo "<h3>1. Indexed Array</h3>";

$fruits = ["Apple", "Banana", "Orange"];

echo "Access single element: " . $fruits[0] . "<br><br>";

echo "Using for loop:<br>";
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "<br>";
}

/* ================================
   2. Associative Array
================================ */
echo "<h3>2. Associative Array</h3>";

$student = [
    "name" => "John",
    "age" => 20,
    "course" => "PHP"
];

echo "Using foreach loop:<br>";
foreach ($student as $key => $value) {
    echo "$key : $value <br>";
}

/* ================================
   3. Multidimensional Array
================================ */
echo "<h3>3. Multidimensional Array</h3>";

$students = [
    ["John", 20, "PHP"],
    ["Alice", 22, "Java"],
    ["Bob", 21, "Python"]
];

echo "Using nested foreach loop:<br>";
foreach ($students as $student) {
    foreach ($student as $value) {
        echo $value . " ";
    }
    echo "<br>";
}

/* ================================
   4. Array Functions
================================ */
echo "<h3>4. Array Functions</h3>";

echo "Count fruits: " . count($fruits) . "<br>";

array_push($fruits, "Mango");
echo "After array_push():<br>";
print_r($fruits);
echo "<br>";

array_pop($fruits);
echo "After array_pop():<br>";
print_r($fruits);
echo "<br>";

/* ================================
   5. Sorting Arrays
================================ */
echo "<h3>5. Sorting Arrays</h3>";

sort($fruits);
echo "Sorted Indexed Array:<br>";
print_r($fruits);
echo "<br>";

asort($student);
echo "Sorted Associative Array by value:<br>";
print_r($student);
echo "<br>";

/* ================================
   6. Searching in Array
================================ */
echo "<h3>6. Searching in Array</h3>";

if (in_array("Apple", $fruits)) {
    echo "Apple found in fruits array<br>";
}

if (array_key_exists("name", $student)) {
    echo "Key 'name' exists in student array<br>";
}

/* ================================
   7. Merge Arrays
================================ */
echo "<h3>7. Merge Arrays</h3>";

$colors1 = ["Red", "Green"];
$colors2 = ["Blue", "Yellow"];

$merged = array_merge($colors1, $colors2);
print_r($merged);

?>
