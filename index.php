<?php
// $age = 0.1;

// if ($age >= 101) {
//     echo "You're Too old to enter this site<br>";
// } elseif ($age >= 18) {
//     echo "You may enter this site<br>";
// } elseif ($age <= 0) {
//     echo "That wasn't a valid age<br>";
// } else {
//     echo "You must be 18+ to enter<br>";
// }

$adult = true;
//if ($adult == true) {
if ($adult) { // this is prefered this the last method
    echo "You may enter this site";
} else {
    echo "You must be an adult to enter this site";
}
