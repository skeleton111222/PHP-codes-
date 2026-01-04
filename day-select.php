<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day Selector</title>
</head>
<body>
    <form action ="day-select.php" method="post">
        <label for="day">Select a Day (1-7):</label><br>
        <input type="number" name="day" min="1" max="7" required><br><br>
        <input type="submit" value="Submit"><br>
    </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $day = $_POST["day"];
        $days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

        if ($day >= 1 && $day <= 7) {
            echo "<br>You selected: " . $days[$day - 1] . "<br>";
        } else {
            echo "<br>Invalid day number. Please enter a number between 1 and 7.<br>";
        }
    }
    ?>

</body>
</html>
