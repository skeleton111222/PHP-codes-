<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="switch-case.php" method="post">
        <label>Day:</label><br>
        <input type="text" name="day"><br>
        <input type="Submit" name="log in"><br>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $day=$_POST["day"];

switch ($day) {
    case "Sunday":
        echo "It's Sunday! The start of a new week!";
        break;
    case "Monday":
        echo "It's Monday! Time to kickstart the week!";
        break;
    case "Tuesday":
        echo "It's Tuesday! Let's keep the momentum going!";
        break;
    case "Wednesday":
        echo "It's Wednesday! We're halfway through the week!";
        break;
    case "Thursday":
        echo "It's Thursday! Almost there!";
        break;
    case "Friday":
        echo "It's Friday! The weekend is almost here!";
        break;
    case "Saturday":
        echo "It's Saturday! Holiday time!";
        break;
    default:
        echo "Invalid day entered!";
        break;
    }
}
?>