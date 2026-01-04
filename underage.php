<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="underage.php" method="post">
        <label>Age:</label>
        <input type="number" placeholder="Enter your age" name="age">
        <input type="submit" name="submit">
    </form>
</body>
</html>
 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST["age"];

    if ($age >= 0 && $age <= 120) {
        if ($age < 18) {
            echo "You are $age years old. So you are underaged.";
        } else {
            echo "You are $age years old. So you are 18+.";
        }
    } else {
        echo "Enter a valid age!";
    }
}
?>