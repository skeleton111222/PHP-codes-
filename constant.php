<?php
// Define constants using define()
define("SITE_NAME", "My Website");
define("MAX_USERS", 100);

// Define constants using const
const PI = 3.1415;
const VERSION = "1.0";

// Using constants
echo SITE_NAME . "<br>";
echo MAX_USERS . "<br>";
echo PI . "<br>";
echo VERSION . "<br>";

// Magic constants
echo "This code's file location is: ". __FILE__ . "<br>";
echo "Current code line number is: ". __LINE__ . "<br>";

// Class constant
class Math {
    const PI = 3.14;
}

echo Math::PI . "<br>";

// Constant array
define("COLORS", ["Red", "Green", "Blue"]);
echo COLORS[0] . "<br>";

// Check if constant exists
if (defined("SITE_NAME")) {
    echo "SITE_NAME is defined<br>";
}
?>
