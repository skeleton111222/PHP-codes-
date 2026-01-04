<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="m.php" method="post">
        <label>X:</label><br>
        <input type="text" name="x"><br>
        <label>Y:</label><br>
        <input type="text" name="y"><br>
        <label>Z:</label><br>
        <input type="text" name="z"><br>
        <input type="Submit" value="total"><br>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$x =$_POST["x"];
$y =$_POST["y"];
$z =$_POST["z"];
$total=null;
$total=abs($x);
echo "{$total}<br>";
$total=round($x);
echo "{$total}<br>";
$total=ceil($x);
echo "{$total}<br>";
$total=floor($x);
echo "{$total}<br>";
$total=sqrt($x);
echo "{$total}<br>";
$total=pow($x,$y);
echo "{$total}<br>";
$total=max($x,$y,$z);
echo "{$total}<br>";
$total=min($x,$y,$z);
echo "{$total}<br>";
$total=pi();
echo "{$total}<br>";
$total =rand(1,6);
echo "{$total}<br>";
}
?>