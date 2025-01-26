<?php
/*switch statement
        1- replacement to using many elseif statements
        2- more efficient and less code to write
*/
$grade = 'F';
// if ($grade == "A" || $grade == "a") {
//     echo "You Did Great";
// } elseif ($grade == "B" || $grade == "b") {
//     echo "You Did Good";
// } elseif ($grade == "C" || $grade == "c") {
//     echo "You Did Okay";
// } elseif ($grade == "D" || $grade == "d") {
//     echo "You Did Poorly";
// } elseif ($grade == "F" || $grade == "f") {
//     echo "You Failed";
// } else {
//     echo "{$grade} is not a vaild grade";
// }
// switch ($grade) {
//     case 'A':
//         echo "You Did Great";
//         break;
//     case 'B':
//         echo "You Did Good";
//         break;
//     case 'C':
//         echo "You Did Okay";
//         break;
//     case 'D':
//         echo "You Did Poorly";
//         break;
//     case 'F':
//         echo "You Failed";
//         break;
//     default:
//         echo "{$grade} is not a vaild grade";
//         break;

$date = date("l");
$date = "Pizza";

switch ($date) {
    case "Monday":
        echo "I hate mondays";
        break;
    case "Tuesday":
        echo "It's a taco day";
        break;
    case "Wednesday":
        echo "The work week is half over";
        break;
    case "Thursday":
        echo "It's almost the weekend";
        break;
    case "Friday":
        echo "The weekend is here";
        break;
    case "Saturday":
        echo "Time to party";
        break;
    case "Sunday":
        echo "Time to Relax";
        break;
    default:
        echo "{$date} is not a vaild day";
        break;
}
