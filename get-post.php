<!-- GET is for retrieving data and is visible in the URL.

POST is for submitting data (like form data) and is hidden from the URL. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="get-post.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="Submit" name="log in"><br>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo $_POST["username"] . "<br>";
    echo $_POST["password"] . "<br>";
}
?>
