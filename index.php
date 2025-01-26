<?php
$temp = 15;
$cloudy = false;
// if ($temp >= 0 && $temp <= 30) {
//     echo "The Weather is Good.";
// } else {
//     echo "The Weather is Bad.";
// }
if ($temp < 0 || $temp > 30) {
    echo "The Weather is Bad.<br>";
} else {
    echo "The Weather is Good.<br>";
}

if (!$cloudy) {
    echo "The Weather is Sunny.";
} else {
    echo "The Weather is Cloudy.";
}
