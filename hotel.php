<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="hotel.php" method="post">
        <label>Quantity:</label><br>
        <input type="text" name="quantity"><br>
        <input type="Submit" value="total"><br>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$item="Pizza";
$price=5.99;
$quantity =$_POST["quantity"];
$total=null;
$total=$quantity*$price;
echo "Your have order {$quantity} {$item}/s <br>";
echo "Your Bill is {$quantity} * {$price}/s = \${$total} <br>";
}
?>