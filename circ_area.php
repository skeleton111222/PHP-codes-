<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="circ_area.php" method="post">
        <label>Radius:</label>
        <input type="text" placeholder="Enter the radius in cm" name="radius">
        <input type="submit" name="calculate">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $radius=$_POST["radius"];
    $area= round(pow($radius,pi()),2);
    $circumference= round(2*pi()*$radius,2);
    $volume=round(4/3*pi()*pow($radius,3),2);
    echo "Circumference : {$circumference}cm<br>";
    echo "Area : {$area}cm^2<br>";
    echo "Volume : {$volume}cm^3<br>";
}
?>