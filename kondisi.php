<?php
$jam = 10;

if($jam < "10") {
    echo "Havve a good morning!";
} elseif ($jam < "20") {
    echo "Have a good day!";
}else {
    echo "Have a good night!";
}

echo"\n";
$favcolor = "red";
switch ($favcolor) {
    case "red":
        echo "Your favorite color color is red";
        break;
    case "blue":
        echo "Your favorite color color is blue";
        break;
}
?>