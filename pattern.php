<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern Generator</title>
</head>
<body>

    <h2>Generate Character Patterns</h2>
    
    <!-- Form to take user input -->
    <form method="POST">
        <label for="i">Number of Rows:</label><br>
        <input type="number" id="i" name="i" min="1" required><br><br>

        <label for="character">Character to print:</label><br>
        <input type="text" id="character" name="character" maxlength="1" required><br><br>

        <input type="submit" value="Generate Pattern">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get values from the form

        global $row;
        global $character;
        $rows = $_POST["i"];
        $character = $_POST["character"];

        // Right-Angle Triangle Pattern
        echo "<br>Pattern 1: Right-Angle Triangle Pattern<br>";
        for ($i = 1; $i <= $rows; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $character;
            }
            echo "<br>";
        }

        // Inverted Right-Angle Triangle Pattern
        echo "<br>Pattern 2: Inverted-Right-Angle Triangle Pattern<br>";
        for ($i = $rows; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo $character;
            }
            echo "<br>";
        }

        // Pyramid Pattern
        echo "<br>Pattern 3: Pyramid Pattern<br>";
        for ($i = 1; $i <= $rows; $i++) {
            // Print spaces
            for ($j = $i; $j < $rows; $j++) {
                echo "&nbsp;&nbsp;";
            }
            // Print characters
            for ($k = 1; $k <= (2 * $i - 1); $k++) {
                echo $character;
            }
            echo "<br>";
        }

        // Inverted Pyramid Pattern
        echo "<br>Pattern 4: Inverted Pyramid Pattern<br>";
        for ($i = $rows; $i >= 1; $i--) {
            // Print spaces
            for ($j = $rows; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            // Print characters
            for ($k = 1; $k <= (2 * $i - 1); $k++) {
                echo $character;
            }
            echo "<br>";
        }

        // Diamond Pattern
        echo "<br>Pattern 5: Diamond Pattern<br>";
        // Upper half of the diamond
        for ($i = 1; $i <= $rows; $i++) {
            // Print spaces
            for ($j = $i; $j < $rows; $j++) {
                echo "&nbsp;&nbsp;";
            }
            // Print characters
            for ($k = 1; $k <= (2 * $i - 1); $k++) {
                echo $character;
            }
            echo "<br>";
        }

        // Lower half of the diamond
        for ($i = $rows - 1; $i >= 1; $i--) {
            // Print spaces
            for ($j = $rows; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            // Print characters
            for ($k = 1; $k <= (2 * $i - 1); $k++) {
                echo $character;
            }
            echo "<br>";
        }
        // Number Pyramid Pattern
        echo "<br>Pattern 6: Number Pyramid Pattern<br>";
        for ($i = 1; $i <= $rows; $i++) {
            // Print spaces to center the numbers
            for ($j = $i; $j < $rows; $j++) {
                echo "&nbsp;&nbsp;";
            }
            // Print ascending numbers
            for ($k = 1; $k <= $i; $k++) {
                echo $k;
            }
            // Print descending numbers
            for ($k = $i - 1; $k >= 1; $k--) {
                echo $k;
            }
            echo "<br>";
        }
        // Floyd's Triangle
        echo"<br>Pattern 7: Floyd’s Triangle (Numbers)<br>";
        $num = 1;
        for ($i = 1; $i <= 4; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $num . "&nbsp;";
                $num++;
            }
            echo "<br>";
        }
    }
?>
</body>
</html>
