<?php
$days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

for ($i = 0; $i < count($days); $i++) {
    echo ($i + 1) . ". " . $days[$i] . "<br>";
}

$selectedDay = "";
do {
    echo "Please select a day by entering its number (1-7): ";
    $selectedDay = trim(fgets(STDIN));
} while ($selectedDay < 1 || $selectedDay > 7);

echo "You selected: " . $days[$selectedDay - 1] . "<br>";

switch ($days[$selectedDay - 1]) {
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
?>
